<%
Const JSON_OBJECT	= 0
Const JSON_ARRAY	= 1

Class jsCore
	Public Collection
	Public Count
	Public QuotedVars
	Public Kind ' 0 = object, 1 = array

	Private Sub Class_Initialize
		Set Collection = CreateObject("Scripting.Dictionary")
		QuotedVars = True
		Count = 0
	End Sub

	Private Sub Class_Terminate
		Set Collection = Nothing
	End Sub

	' counter
	Private Property Get Counter
		Counter = Count
		Count = Count + 1
	End Property

	' - data maluplation
	' -- pair
	Public Property Let Pair(p, v)
		If IsNull(p) Then p = Counter
		Collection(p) = v
	End Property

	Public Property Set Pair(p, v)
		If IsNull(p) Then p = Counter
		If TypeName(v) <> "jsCore" Then
			Err.Raise &hD, "class: class", "Incompatible types: '" & TypeName(v) & "'"
		End If
		Set Collection(p) = v
	End Property

	Public Default Property Get Pair(p)
		If IsNull(p) Then p = Count - 1
		If IsObject(Collection(p)) Then
			Set Pair = Collection(p)
		Else
			Pair = Collection(p)
		End If
	End Property
	' -- pair
	Public Sub Clean
		Collection.RemoveAll
	End Sub

	Public Sub Remove(vProp)
		Collection.Remove vProp
	End Sub
	' data maluplation

	' encoding
	Function jsEncode(str)
		Dim charmap(127), haystack()
		charmap(8)  = "\b"
		charmap(9)  = "\t"
		charmap(10) = "\n"
		charmap(12) = "\f"
		charmap(13) = "\r"
		charmap(34) = "\"""
		charmap(47) = "\/"
		charmap(92) = "\\"

		Dim strlen : strlen = Len(str) - 1
		ReDim haystack(strlen)

		Dim i, charcode
		For i = 0 To strlen
			haystack(i) = Mid(str, i + 1, 1)

			charcode = AscW(haystack(i)) And 65535
			If charcode < 127 Then
				If Not IsEmpty(charmap(charcode)) Then
					haystack(i) = charmap(charcode)
				ElseIf charcode < 32 Then
					haystack(i) = "\u" & Right("000" & Hex(charcode), 4)
				End If
			Else
				haystack(i) = "\u" & Right("000" & Hex(charcode), 4)
			End If
		Next

		jsEncode = Join(haystack, "")
	End Function

	' converting
	Public Function toJSON(vPair)
		Select Case VarType(vPair)
			Case 0	' Empty
				toJSON = "null"
			Case 1	' Null
				toJSON = "null"
			Case 7	' Date
				' toJSON = "new Date(" & (vPair - CDate(25569)) * 86400000 & ")"	' let in only utc time
				toJSON = """" & CStr(vPair) & """"
			Case 8	' String
				toJSON = """" & jsEncode(vPair) & """"
			Case 9	' Object
				Dim bFI,i
				bFI = True
				If vPair.Kind Then toJSON = toJSON & "[" Else toJSON = toJSON & "{"
				For Each i In vPair.Collection
					If bFI Then bFI = False Else toJSON = toJSON & ","

					If vPair.Kind Then
						toJSON = toJSON & toJSON(vPair(i))
					Else
						If QuotedVars Then
							toJSON = toJSON & """" & i & """:" & toJSON(vPair(i))
						Else
							toJSON = toJSON & i & ":" & toJSON(vPair(i))
						End If
					End If
				Next
				If vPair.Kind Then toJSON = toJSON & "]" Else toJSON = toJSON & "}"
			Case 11
				If vPair Then toJSON = "true" Else toJSON = "false"
			Case 12, 8192, 8204
				toJSON = RenderArray(vPair, 1, "")
			Case Else
				toJSON = Replace(vPair, ",", ".")
		End select
	End Function

	Function RenderArray(arr, depth, parent)
		Dim first : first = LBound(arr, depth)
		Dim last : last = UBound(arr, depth)

		Dim index, rendered
		Dim limiter : limiter = ","

		RenderArray = "["
		For index = first To last
			If index = last Then
				limiter = ""
			End If

			On Error Resume Next
			rendered = RenderArray(arr, depth + 1, parent & index & "," )

			If Err = 9 Then
				On Error GoTo 0
				RenderArray = RenderArray & toJSON(Eval("arr(" & parent & index & ")")) & limiter
			Else
				RenderArray = RenderArray & rendered & "" & limiter
			End If
		Next
		RenderArray = RenderArray & "]"
	End Function

	Public Property Get jsString
		jsString = toJSON(Me)
	End Property

	Sub Flush
		If TypeName(Response) <> "Empty" Then
			Response.Write(jsString)
		ElseIf WScript <> Empty Then
			WScript.Echo(jsString)
		End If
	End Sub

	Public Function Clone
		Set Clone = ColClone(Me)
	End Function

	Private Function ColClone(core)
		Dim jsc, i
		Set jsc = new jsCore
		jsc.Kind = core.Kind
		For Each i In core.Collection
			If IsObject(core(i)) Then
				Set jsc(i) = ColClone(core(i))
			Else
				jsc(i) = core(i)
			End If
		Next
		Set ColClone = jsc
	End Function

End Class

Function jsObject
	Set jsObject = new jsCore
	jsObject.Kind = JSON_OBJECT
End Function

Function jsArray
	Set jsArray = new jsCore
	jsArray.Kind = JSON_ARRAY
End Function

Function toJSON(val)
	toJSON = (new jsCore).toJSON(val)
End Function
%>
<%
'Custom Functions
Function StripSpecialChar(strInput)
	Dim objRegExp
	Set objRegExp = New Regexp
	objRegExp.IgnoreCase = True
	objRegExp.Global = True
	objRegExp.Pattern = "[\+\#\@\&\%\$\?\*]"
	'//Replace all character matches with an Empty String
	StripSpecialChar = objRegExp.Replace(strInput, "")
	Set objRegExp = Nothing
End Function
%>

<%

'version: 1.0
Dim email, apikey, query, filename, check, objFSO

Set objFSO = CreateObject("Scripting.FileSystemObject")

On error resume next
'this line below, deletes old sql files that created with this script before.
objFSO.DeleteFile Server.MapPath("./") & "/optimum7*", True

'Please dont edit these lines if you dont know what to do
url = "http://" & Request.ServerVariables("SERVER_NAME") & "/"
email = request.form("api_user")
apikey = request.form("api_key")
query = request.form("query")
forceRequest = request.form("forceRequest")

xsdcontent = "<?xml version="&Chr(34)&"1.0"&Chr(34)&" encoding="&Chr(34)&"utf-8"&Chr(34)&"?><xs:schema id="&Chr(34)&"xmldata"&Chr(34)&" xmlns="&Chr(34)&Chr(34)&" xmlns:xs="&Chr(34)&"http://www.w3.org/2001/XMLSchema"&Chr(34)&" xmlns:msdata="&Chr(34)&"urn:schemas-microsoft-com:xml-msdata"&Chr(34)&" xmlns:msprop="&Chr(34)&"urn:schemas-microsoft-com:xml-msprop"&Chr(34)&"></xs:schema>"
randomize
filename =  "optimum7-"&Int((9999999999 * Rnd) + 1)

set fs=Server.CreateObject("Scripting.FileSystemObject")
set f=fs.OpenTextFile(Server.MapPath("./"&filename&".xsd"),2,true)
f.WriteLine(xsdcontent)
f.Close
set f=Nothing
set fs=Nothing

set fs=Server.CreateObject("Scripting.FileSystemObject")
set f=fs.OpenTextFile(Server.MapPath("./"&filename&".sql"),2,true)
f.WriteLine(query)
f.Close
set f=Nothing
set fs=Nothing

If forceRequest Then
        Set ObjectArray = jsObject()
        ObjectArray("SQLFileName") = filename
        ObjectArray.Flush
Else
    Set httpRequest = Server.CreateObject("MSXML2.ServerXMLHTTP")
        httpRequest.Open "GET", url&"net/WebService.aspx?Login="&email&"&EncryptedPassword="&apikey&"&EDI_Name=Generic\"&filename, False
        httpRequest.SetRequestHeader "Content-Type", "text/xml"
        httpRequest.Send

    postResponse = httpRequest.responseText
    response.ContentType = "application/json"
    Set oXML = Server.CreateObject("Microsoft.XMLDOM")
    oXML.LoadXML(postResponse)
    Set TableNodes = oXML.SelectNodes("/xmldata/Table")

    Set ObjectArray = jsArray()
    If TableNodes.length > 0 Then
        for each book in TableNodes
            Set ObjectArray(Null) = jsObject()
            for each nook in book.ChildNodes
                ObjectArray(Null)(nook.nodeName) = nook.Text
            next
        next
    Else
        Set ObjectArray = jsObject()
        ObjectArray("Success") = oXML.SelectSingleNode("/ReturnResult/Success").Text
        ObjectArray("Message") = oXML.SelectSingleNode("/ReturnResult/Message").Text
    End IF
    ObjectArray.Flush
End IF
%>