<?php
/*
*Nama Script: IndoWapBlog Multi Site
*Pembuat: Achunk JealousMan
*Email: achunk17[at]gmail[dot]com
*Situs: http://indowapblog.com
*Facebook: http://www.facebook.com/achunks
*/

eval(base64_decode("CgovKgoqTmFtYSBTY3JpcHQ6IEluZG9XYXBCbG9nIE11bHRpIFNpdGUKKlZlcnNpOiAoTGloYXQgVkVSU0lPTi50eHQpCipQZW1idWF0OiBBY2h1bmsgSmVhbG91c01hbgoqRW1haWw6IGFjaHVuazE3W2F0XWdtYWlsW2RvdF1jb20KKlNpdHVzOiBodHRwOi8vaW5kb3dhcGJsb2cuY29tCipGYWNlYm9vazogaHR0cDovL3d3dy5mYWNlYm9vay5jb20vYWNodW5rcwoqLwoKZGVmaW5lKCdfSVdCXycsIDEpOw0KCnJlcXVpcmVfb25jZSgnaW5jL2luZG93YXBibG9nLnBocCcpOwoKJGl3Yj1pc3NldCgkX0dFVFsnaXdiJ10pID8gdHJpbSgkX0dFVFsnaXdiJ10pIDogJyc7CnN3aXRjaCAoJGl3YikKewpjYXNlICdkZWxldGUnOgokY29taWQ9aHRtbGVudGl0aWVzKCRfR0VUWydjb21pZCddKTsKJGFsbD1odG1sZW50aXRpZXMoJF9HRVRbJ2FsbCddKTsKJHJlZGlyPSRfR0VUWydyZWRpciddOwokYmFjaz1zdHJfcmVwbGFjZSgnJmFtcDsnLCAnJicsIGh0bWxlbnRpdGllcyhiYXNlNjRfZGVjb2RlKCRyZWRpcikpKTsKaWYgKCEkdXNlcl9pZCkKcmVsb2dpbigpOwokcmVxPW15c3FsX3F1ZXJ5KCJzZWxlY3QgKiBmcm9tIGNvbW1lbnQgd2hlcmUgaWQ9JyIubXlzcWxfcmVhbF9lc2NhcGVfc3RyaW5nKCRjb21pZCkuIicgYW5kIHNpdGVfaWQ9JyIuJHVzZXJfaWQuIiciKTsKaWYgKG15c3FsX251bV9yb3dzKCRyZXEpID09IDApCnsKcmVxdWlyZV9vbmNlKCdpbmMvaGVhZC5waHAnKTsKcGFnZV9ub3RfZm91bmQoKTsKcmVxdWlyZV9vbmNlKCdpbmMvZm9vdC5waHAnKTsKZXhpdDsKfQppZiAoISRpc19hdXRob3IpCnsKcmVxdWlyZV9vbmNlKCdpbmMvaGVhZC5waHAnKTsKZm9yYmlkZGVuKCk7CnJlcXVpcmVfb25jZSgnaW5jL2Zvb3QucGhwJyk7CmV4aXQ7Cn0KJGRlbD1teXNxbF9mZXRjaF9hcnJheSgkcmVxKTsKaWYgKGlzc2V0KCRfR0VUWyd5ZXMnXSkpCnsKaWYgKCRhbGwgPT0gJ2FwcHJvdmVkJykKJHN0cz0nMSc7CmlmICgkYWxsID09ICd1bmFwcHJvdmVkJykKJHN0cz0nMCc7CmlmICgkYWxsID09ICdzcGFtJykKJHN0cz0nMic7CgppZiAoJGFsbCkKbXlzcWxfcXVlcnkoImRlbGV0ZSBmcm9tIGNvbW1lbnQgd2hlcmUgc2l0ZV9pZD0nIi4kdXNlcl9pZC4iJyBhbmQgc3RhdHVzPSciLiRzdHMuIiciKQo7CmlmICgkY29taWQpCnsKbXlzcWxfcXVlcnkoImRlbGV0ZSBmcm9tIGNvbW1lbnQgd2hlcmUgaWQ9JyIuJGRlbFsnaWQnXS4iJyBhbmQgc2l0ZV9pZD0nIi4kdXNlcl9pZC4iJyIpOwp9CmhlYWRlcignbG9jYXRpb246ICcuJGJhY2suJycpOwp9CiRoZWFkX3RpdGxlPScnLiRMQU5HWydkZWxldGUnXS4nICcuJExBTkdbJ2NvbW1lbnRzJ10uJyc7CnJlcXVpcmVfb25jZSgnaW5jL2hlYWQucGhwJyk7CmVjaG8gJzxkaXYgaWQ9Im1lc3NhZ2UiPjxvbCBpZD0ibm90aWNlIj48bGk+JzsKCmlmICgkYWxsID09ICdhcHByb3ZlZCcpCmVjaG8gJycuJExBTkdbJ2RlbGV0ZV9jb25maXJtJ10uJzxici8+WzxhIGhyZWY9Im1hbmFnZV9jb21tZW50LnBocD9pd2I9ZGVsZXRlJmFtcDthbGw9Jy4kYWxsLicmYW1wO3llcz0mYW1wO3JlZGlyPScuJHJlZGlyLiciPicuJExBTkdbJ3llcyddLic8L2E+XSBbPGEgaHJlZj0iJy4kYmFjay4nIj4nLiRMQU5HWydubyddLic8L2E+XSc7CgppZiAoJGFsbCA9PSAndW5hcHByb3ZlZCcpCmVjaG8gJycuJExBTkdbJ2RlbGV0ZV9jb25maXJtJ10uJzxici8+WzxhIGhyZWY9Im1hbmFnZV9jb21tZW50LnBocD9pd2I9ZGVsZXRlJmFtcDthbGw9Jy4kYWxsLicmYW1wO3llcz0mYW1wO3JlZGlyPScuJHJlZGlyLiciPicuJExBTkdbJ3llcyddLic8L2E+XSBbPGEgaHJlZj0iJy4kYmFjay4nIj4nLiRMQU5HWydubyddLic8L2E+XSc7CgppZiAoJGFsbCA9PSAnc3BhbScpCmVjaG8gJycuJExBTkdbJ2RlbGV0ZV9jb25maXJtJ10uJzxici8+WzxhIGhyZWY9Im1hbmFnZV9jb21tZW50LnBocD9pd2I9ZGVsZXRlJmFtcDthbGw9Jy4kYWxsLicmYW1wO3llcz0mYW1wO3JlZGlyPScuJHJlZGlyLiciPicuJExBTkdbJ3llcyddLic8L2E+XSBbPGEgaHJlZj0iJy4kYmFjay4nIj4nLiRMQU5HWydubyddLic8L2E+XSc7CgppZiAoJGNvbWlkKQplY2hvICcnLiRMQU5HWydkZWxldGVfY29uZmlybSddLic8YnIvPls8YSBocmVmPSJtYW5hZ2VfY29tbWVudC5waHA/aXdiPWRlbGV0ZSZhbXA7Y29taWQ9Jy4kY29taWQuJyZhbXA7eWVzPSZhbXA7cmVkaXI9Jy4kcmVkaXIuJyI+Jy4kTEFOR1sneWVzJ10uJzwvYT5dIFs8YSBocmVmPSInLiRiYWNrLiciPicuJExBTkdbJ25vJ10uJzwvYT5dJzsKCmVjaG8gJzwvbGk+PC9vbD48L2Rpdj4nOwpyZXF1aXJlX29uY2UoJ2luYy9mb290LnBocCcpOwpicmVhazsKCmNhc2UgJ2FwcHJvdmVkJzoKY2FzZSAndW5hcHByb3ZlZCc6CmNhc2UgJ3NwYW0nOgppZiAoISR1c2VyX2lkKQpyZWxvZ2luKCk7CmlmICghJGlzX2F1dGhvcikKewpyZXF1aXJlX29uY2UoJ2luYy9oZWFkLnBocCcpOwpmb3JiaWRkZW4oKTsKcmVxdWlyZV9vbmNlKCdpbmMvZm9vdC5waHAnKTsKZXhpdDsKfQokY29taWQ9JF9HRVRbJ2NvbWlkJ107CiRpbj0kX0dFVFsnaXdiJ107CiRwYWdlPSRfR0VUWydwYWdlJ107DQoKaWYgKCRpbiA9PSAnYXBwcm92ZWQnKQokc3RhdHVzPScxJzsKaWYgKCRpbiA9PSAndW5hcHByb3ZlZCcpCiRzdGF0dXM9JzAnOwppZiAoJGluID09ICdzcGFtJykKJHN0YXR1cz0nMic7CgokdG90YWw9bXlzcWxfcmVzdWx0KG15c3FsX3F1ZXJ5KCJzZWxlY3QgY291bnQoKikgZnJvbSBjb21tZW50IHdoZXJlIHNpdGVfaWQ9JyIuJHVzZXJfaWQuIicgYW5kIHN0YXR1cz0nIi4kc3RhdHVzLiInIiksIDApOwppZiAoIWN0eXBlX2RpZ2l0KCRwYWdlKSB8fCBlbXB0eSgkcGFnZSkgfHwgJHBhZ2UgPT0gMCB8fCAkcGFnZSA+IChjZWlsKCR0b3RhbCAvICRzaXRlWydudW1fcG9zdF9tYWluJ10pKSkNCiRwYWdlPScxJzsNCiRwYWdlLS07DQokbWF4X3ZpZXc9JHNpdGVbJ251bV9wb3N0X21haW4nXTsNCiRsaW1pdD0kcGFnZSokbWF4X3ZpZXc7DQokcGFnZSsrOw0KaWYgKGlzc2V0KCRfR0VUWydjb21pZCddKSkKewokcmVkaXI9c3RyX3JlcGxhY2UoJyZhbXA7JywgJyYnLCBodG1sZW50aXRpZXMoYmFzZTY0X2RlY29kZSgkX0dFVFsncmVkaXInXSkpKTsKJENvbT1teXNxbF9mZXRjaF9hcnJheShteXNxbF9xdWVyeSgic2VsZWN0ICogZnJvbSBjb21tZW50IHdoZXJlIGlkPSciLm15c3FsX3JlYWxfZXNjYXBlX3N0cmluZygkY29taWQpLiInIGFuZCBzaXRlX2lkPSciLiR1c2VyX2lkLiInIikpOwppZiAoJENvbVsnc2l0ZV9pZCddICE9ICR1c2VyX2lkKQp7CnJlcXVpcmVfb25jZSgnaW5jL2hlYWQucGhwJyk7CmZvcmJpZGRlbigpOwpyZXF1aXJlX29uY2UoJ2luYy9mb290LnBocCcpOwpleGl0Owp9CmVsc2UKewpteXNxbF9xdWVyeSgidXBkYXRlIGNvbW1lbnQgc2V0IHN0YXR1cz0nIi4kc3RhdHVzLiInIHdoZXJlIGlkPSciLiRDb21bJ2lkJ10uIicgYW5kIHNpdGVfaWQ9JyIuJHVzZXJfaWQuIiciKTsKaGVhZGVyKCdsb2NhdGlvbjogJy4kcmVkaXIuJycpOwpleGl0Owp9Cn0KCgppZiAoJGluID09ICd1bmFwcHJvdmVkJykKJGhlYWRfdGl0bGU9JExBTkdbJ3VuYXBwcm92ZWQnXTsKaWYgKCRpbiA9PSAnYXBwcm92ZWQnKQokaGVhZF90aXRsZT0kTEFOR1snYXBwcm92ZWQnXTsKaWYgKCRpbiA9PSAnc3BhbScpCiRoZWFkX3RpdGxlPSRMQU5HWydzcGFtJ107CgpyZXF1aXJlX29uY2UoJ2luYy9oZWFkLnBocCcpOwplY2hvICc8ZGl2IGlkPSJtZXNzYWdlIj48L2Rpdj48ZGl2IGlkPSJjb250ZW50Ij48ZGl2IGlkPSJtYWluLWNvbnRlbnQiPic7CmVjaG8gJzxkaXYgaWQ9InNob3dfYmFyIj48YSBocmVmPSJtYW5hZ2VfY29tbWVudC5waHAiPicuJExBTkdbJ2FsbCddLic8L2E+IHwgJzsKaWYgKCRpbiA9PSAnYXBwcm92ZWQnKQplY2hvICRMQU5HWydhcHByb3ZlZCddOwplbHNlCmVjaG8gJzxhIGhyZWY9Im1hbmFnZV9jb21tZW50LnBocD9pd2I9YXBwcm92ZWQiPicuJExBTkdbJ2FwcHJvdmVkJ10uJzwvYT4nOwplY2hvICcgfAonOwppZiAoJGluID09ICd1bmFwcHJvdmVkJykKZWNobyAkTEFOR1sndW5hcHByb3ZlZCddOwplbHNlCmVjaG8gJzxhIGhyZWY9Im1hbmFnZV9jb21tZW50LnBocD9pd2I9dW5hcHByb3ZlZCI+Jy4kTEFOR1sndW5hcHByb3ZlZCddLic8L2E+JzsKZWNobyAnIHwgJzsKaWYgKCRpbiA9PSAnc3BhbScpCmVjaG8gJExBTkdbJ3NwYW0nXTsKZWxzZQplY2hvICc8YSBocmVmPSJtYW5hZ2VfY29tbWVudC5waHA/aXdiPXNwYW0iPicuJExBTkdbJ3NwYW0nXS4nPC9hPic7CmVjaG8gJzwvZGl2Pic7CmVjaG8gJzxvbD4nOwoKJHJlcT1teXNxbF9xdWVyeSgic2VsZWN0ICogZnJvbSBjb21tZW50IHdoZXJlIHNpdGVfaWQ9JyIuJHVzZXJfaWQuIicgYW5kIHN0YXR1cz0nIi4kc3RhdHVzLiInIG9yZGVyIGJ5IHRpbWUgZGVzYyBsaW1pdCAkbGltaXQsJG1heF92aWV3Iik7CmlmICgkdG90YWwgPiAwKQp7CiRyZCA9IGJhc2U2NF9lbmNvZGUoaHRtbHNwZWNpYWxjaGFycygkX1NFUlZFUlsnUkVRVUVTVF9VUkknXSkpOwoKd2hpbGUgKCRjb209bXlzcWxfZmV0Y2hfYXJyYXkoJHJlcSkpCnsKJGJsb2c9bXlzcWxfZmV0Y2hfYXJyYXkobXlzcWxfcXVlcnkoInNlbGVjdCB0aXRsZSwgbGluayBmcm9tIGJsb2cgd2hlcmUgaWQ9JyIuJGNvbVsnYmxvZ19pZCddLiInIikpOwplY2hvICRpICUgMiA/ICc8bGkgY2xhc3M9InJvdzEiPicgOiAnPGxpIGNsYXNzPSJyb3cwIj4nOwppZiAoJGNvbVsndXNlcl9pZCddICE9IDApCmVjaG8gJzxhIGhyZWY9IicuJHNpdGVbJ3VybCddLicvdXNlci5waHA/aWQ9Jy4kY29tWyd1c2VyX2lkJ10uJyI+Jy5odG1sc3BlY2lhbGNoYXJzKCRjb21bJ25hbWUnXSkuJzwvYT4nOwplbHNlCmVjaG8gaHRtbHNwZWNpYWxjaGFycygkY29tWyduYW1lJ10pOwplY2hvICc8YnIgLz4nLiRMQU5HWydvbiddLicgPGEgaHJlZj0iJy4kdXNlcl9zaXRlLicvJy4kYmxvZ1snbGluayddLicueGh0bWwjY29tbWVudHMiIGFjY2Vzc2tleT0iMSI+Jy5odG1sc3BlY2lhbGNoYXJzKCRibG9nWyd0aXRsZSddKS4nPC9hPjxici8+Wycud2FrdHUoJGNvbVsndGltZSddKS4nXTxici8+Jy5iYnNtKCRjb21bJ3RleHQnXSkuJzxici8+PHNwYW4gY2xhc3M9ImFjdGlvbl9saW5rcyI+JzsKaWYgKCRjb21bJ3N0YXR1cyddID09IDEpCmVjaG8gJ1s8YSBjbGFzcz0icmVwbHkiIGhyZWY9Im1hbmFnZV9jb21tZW50LnBocD9pd2I9cmVwbHkmYW1wO2NvbWlkPScuJGNvbVsnaWQnXS4nIj4nLiRMQU5HWydyZXBseSddLic8L2E+XSAnOwoKaWYgKCRjb21bJ3N0YXR1cyddID09IDApCmVjaG8gJ1s8Zm9udCBjb2xvcj0iYmxhY2siPicuJExBTkdbJ3VuYXBwcm92ZWQnXS4nPC9mb250Pl0gJzsKZWxzZQplY2hvICdbPGEgaHJlZj0ibWFuYWdlX2NvbW1lbnQucGhwP2l3Yj11bmFwcHJvdmVkJmFtcDtjb21pZD0nLiRjb21bJ2lkJ10uJyZhbXA7cmVkaXI9Jy4kcmQuJyI+Jy4kTEFOR1sndW5hcHByb3ZlZCddLic8L2E+XSAnOwoKaWYgKCRjb21bJ3N0YXR1cyddID09IDEpCmVjaG8gJ1s8Zm9udCBjb2xvcj0iYmxhY2siPicuJExBTkdbJ2FwcHJvdmVkJ10uJzwvZm9udD5dICc7CmVsc2UKZWNobyAnWzxhIGhyZWY9Im1hbmFnZV9jb21tZW50LnBocD9pd2I9YXBwcm92ZWQmYW1wO2NvbWlkPScuJGNvbVsnaWQnXS4nJmFtcDtyZWRpcj0nLiRyZC4nIj4nLiRMQU5HWydhcHByb3ZlZCddLic8L2E+XSAnOwoKaWYgKCRjb21bJ3N0YXR1cyddID09IDIpCmVjaG8gJ1s8Zm9udCBjb2xvcj0iYmxhY2siPicuJExBTkdbJ3NwYW0nXS4nPC9mb250Pl0gJzsKZWxzZQplY2hvICdbPGEgaHJlZj0ibWFuYWdlX2NvbW1lbnQucGhwP2l3Yj1zcGFtJmFtcDtjb21pZD0nLiRjb21bJ2lkJ10uJyZhbXA7cmVkaXI9Jy4kcmQuJyI+Jy4kTEFOR1snc3BhbSddLic8L2E+XSAnOwoKZWNobyAnWzxhIGNsYXNzPSJkZWxldGUiIGhyZWY9Im1hbmFnZV9jb21tZW50LnBocD9pd2I9ZGVsZXRlJmFtcDtjb21pZD0nLiRjb21bJ2lkJ10uJyZhbXA7cmVkaXI9Jy4kcmQuJyZhbXA7eWVzPW9rIj48Zm9udCBjb2xvcj0icmVkIj4nLiRMQU5HWydkZWxldGUnXS4nPC9mb250PjwvYT5dPC9zcGFuPic7CisrJGk7CmVjaG8gJzwvbGk+JzsKfQplY2hvICc8cD48Zm9ybSBtZXRob2Q9ImdldCIgYWN0aW9uPSJtYW5hZ2VfY29tbWVudC5waHAiPjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9Iml3YiIgdmFsdWU9ImRlbGV0ZSIvPjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImFsbCIgdmFsdWU9IicuaHRtbHNwZWNpYWxjaGFycygkaW4pLiciLz48aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJyZWRpciIgdmFsdWU9IicuJHJkLiciLz48aW5wdXQgY2xhc3M9Iml3Yi1idXR0b24iIHR5cGU9InN1Ym1pdCIgdmFsdWU9IicuJExBTkdbJ2RlbGV0ZV9hbGwnXS4nIi8+PC9hPjwvcD4nOwp9CmVsc2UKewplY2hvICc8bGk+Jy4kTEFOR1snZW1wdHknXS4nPC9saT4nOwp9CmVjaG8gJzwvb2w+PC9kaXY+JzsKJGxpbms9J21hbmFnZV9jb21tZW50LnBocD9pd2I9Jy5odG1sc3BlY2lhbGNoYXJzKCRpbikuJyZhbXA7cGFnZT0nOwokcT0nJzsKcGFnaW5hdGlvbigkcGFnZSwkbWF4X3ZpZXcsJHRvdGFsLCRsaW5rLCRxKTsKZWNobyAnPC9kaXY+JzsKcmVxdWlyZV9vbmNlKCdpbmMvZm9vdC5waHAnKTsKYnJlYWs7CgpjYXNlICdyZXBseSc6CiRjb21pZD0kX0dFVFsnY29taWQnXTsKJHJlcGx5PSRfUE9TVFsncmVwbHknXTsKaWYgKCEkdXNlcl9pZCkKcmVsb2dpbigpOwokcmVxPW15c3FsX3F1ZXJ5KCJzZWxlY3QgKiBmcm9tIGNvbW1lbnQgd2hlcmUgaWQ9JyIubXlzcWxfcmVhbF9lc2NhcGVfc3RyaW5nKCRjb21pZCkuIicgYW5kIHNpdGVfaWQ9JyIuJHVzZXJfaWQuIiciKTsKaWYgKG15c3FsX251bV9yb3dzKCRyZXEpID09IDApCnsKcmVxdWlyZV9vbmNlKCdpbmMvaGVhZC5waHAnKTsKcGFnZV9ub3RfZm91bmQoKTsKcmVxdWlyZV9vbmNlKCdpbmMvZm9vdC5waHAnKTsKZXhpdDsKfQplbHNlCnsKaWYgKCEkaXNfYXV0aG9yKQp7CnJlcXVpcmVfb25jZSgnaW5jL2hlYWQucGhwJyk7CmZvcmJpZGRlbigpOwpyZXF1aXJlX29uY2UoJ2luYy9mb290LnBocCcpOwpleGl0Owp9CiRyZXM9bXlzcWxfZmV0Y2hfYXJyYXkoJHJlcSk7CmlmIChpc3NldCgkX1BPU1RbJ3NlbmQnXSkpCnsKaWYgKG1iX3N0cmxlbigkcmVwbHkpID4gNTAwKQokaHNsPSdQZXNhbiBtYWtzaW1hbCA1MDAga2FyYWt0ZXInOwplbHNlaWYgKGVtcHR5KCRyZXBseSkpCiRoc2w9J1NpbGFrYW4gdHVsaXMga29tZW50YXIgQW5kYSc7CmlmIChlbXB0eSgkaHNsKSkKewpteXNxbF9xdWVyeSgiaW5zZXJ0IGludG8gY29tbWVudCBzZXQgc2l0ZV9pZD0nIi4kdXNlcl9pZC4iJywgdXNlcl9pZD0nIi4kdXNlcl9pZC4iJywgYmxvZ19pZD0nIi4kcmVzWydibG9nX2lkJ10uIicsIG5hbWU9JyIubXlzcWxfcmVhbF9lc2NhcGVfc3RyaW5nKCR1c2VyX25hbWUpLiInLCB0ZXh0PSciLm15c3FsX3JlYWxfZXNjYXBlX3N0cmluZygkcmVwbHkpLiInLCBzaXRlPSciLm15c3FsX3JlYWxfZXNjYXBlX3N0cmluZygkdXNlcl9zaXRlKS4iJywgc3RhdHVzPScxJywgdGltZT0nIi50aW1lKCkuIiciKTsKaGVhZGVyKCdsb2NhdGlvbjogbWFuYWdlX2NvbW1lbnQucGhwP3JlcGx5X3N1Y2Nlc3NmdWxseScpOwp9Cn0KJGhlYWRfdGl0bGU9JycuJExBTkdbJ3JlcGx5J10uJyAnLiRMQU5HWydjb21tZW50cyddLicnOwpyZXF1aXJlX29uY2UoJ2luYy9oZWFkLnBocCcpOwplY2hvICc8ZGl2IGlkPSJtZXNzYWdlIj4KPC9kaXY+CjxkaXYgaWQ9ImNvbnRlbnQiPgo8ZGl2IGlkPSJtYWluLWNvbnRlbnQiPic7CmVjaG8gJzxkaXYgaWQ9InNob3dfYmFyIj48YSBocmVmPSJtYW5hZ2VfY29tbWVudC5waHA/Ij4nLiRMQU5HWydhbGwnXS4nPC9hPiB8IDxhIGhyZWY9Im1hbmFnZV9jb21tZW50LnBocD9pd2I9YXBwcm92ZWQiPicuJExBTkdbJ2FwcHJvdmVkJ10uJzwvYT4gfAo8YSBocmVmPSJtYW5hZ2VfY29tbWVudC5waHA/aXdiPXVuYXBwcm92ZWQiPicuJExBTkdbJ3VuYXBwcm92ZWQnXS4nPC9hPiB8IDxhIGhyZWY9Im1hbmFnZV9jb21tZW50LnBocD9pd2I9c3BhbSI+Jy4kTEFOR1snc3BhbSddLic8L2E+PC9kaXY+JzsKCmVjaG8gJzxoND4nLiRMQU5HWydyZXBseSddLicgJy4kTEFOR1snY29tbWVudHMnXS4nPC9oND4KPHAgY2xhc3M9InJvdzAiPgo8c3Ryb25nPic7CmlmICgkcmVzWyd1c2VyX2lkJ10gIT0gMCkKZWNobyAnPGEgaHJlZj0idXNlci5waHA/aWQ9Jy4kcmVzWydpZCddLiciPicuaHRtbHNwZWNpYWxjaGFycygkcmVzWyduYW1lJ10pLic8L2E+JzsKZWxzZQplY2hvIGh0bWxzcGVjaWFsY2hhcnMoJHJlc1snbmFtZSddKTsKZWNobyAnPC9zdHJvbmc+PGJyLz5bJy53YWt0dSgkcmVzWyd0aW1lJ10pLiddPGJyLz4nLmJic20oJHJlc1sndGV4dCddKS4nPC9wPgo8Zm9ybSBhY3Rpb249Im1hbmFnZV9jb21tZW50LnBocD9pd2I9cmVwbHkmYW1wO2NvbWlkPScuJHJlc1snaWQnXS4nIiBtZXRob2Q9InBvc3QiPjxoND4nLiRMQU5HWydyZXBseSddLic8L2g0Pic7CiRyZXBsYXlfdG89JHJlc1snbmFtZSddOwplY2hvICc8dGV4dGFyZWEgY2xhc3M9Iml3Yi10ZXh0YXJlYSIgbmFtZT0icmVwbHkiIHJvd3M9IjUiIGNvbHM9IjMwIj5AJy5odG1sZW50aXRpZXMoJHJlcGxheV90bykuJywKPC90ZXh0YXJlYT48YnIvPgo8aW5wdXQgY2xhc3M9Iml3Yi1idXR0b24iIG5hbWU9InNlbmQiIHR5cGU9InN1Ym1pdCIgdmFsdWU9IicuJExBTkdbJ3NlbmQnXS4nIi8+JzsKZWNobyAnPC9kaXY+PC9kaXY+JzsKcmVxdWlyZV9vbmNlKCdpbmMvZm9vdC5waHAnKTsKfQpicmVhazsKCmRlZmF1bHQ6CmlmICghJHVzZXJfaWQpCnJlbG9naW4oKTsKaWYgKCEkaXNfYXV0aG9yKQp7CnJlcXVpcmVfb25jZSgnaW5jL2hlYWQucGhwJyk7CmZvcmJpZGRlbigpOwpyZXF1aXJlX29uY2UoJ2luYy9mb290LnBocCcpOwpleGl0Owp9CgokcGFnZT0kX0dFVFsncGFnZSddOw0KJGJpZD0kX0dFVFsnYmlkJ107CgppZiAoaXNzZXQoJF9HRVRbJ2JpZCddKSkKewokdG90YWw9bXlzcWxfcmVzdWx0KG15c3FsX3F1ZXJ5KCJzZWxlY3QgY291bnQoKikgZnJvbSBjb21tZW50IHdoZXJlIHNpdGVfaWQ9JyIubXlzcWxfcmVhbF9lc2NhcGVfc3RyaW5nKCR1c2VyX2lkKS4iJyBhbmQgYmxvZ19pZD0nIi5teXNxbF9yZWFsX2VzY2FwZV9zdHJpbmcoJGJpZCkuIiciKSwgMCk7Cn0KZWxzZQp7CiR0b3RhbD1teXNxbF9yZXN1bHQobXlzcWxfcXVlcnkoInNlbGVjdCBjb3VudCgqKSBmcm9tIGNvbW1lbnQgd2hlcmUgc2l0ZV9pZD0nIi4kdXNlcl9pZC4iJyIpLCAwKTsKfQppZiAoIWN0eXBlX2RpZ2l0KCRwYWdlKSB8fCBlbXB0eSgkcGFnZSkgfHwgJHBhZ2UgPT0gMCB8fCAkcGFnZSA+IChjZWlsKCR0b3RhbCAvICRzaXRlWydudW1fcG9zdF9tYWluJ10pKSkNCiRwYWdlPScxJzsNCiRwYWdlLS07DQokbWF4X3ZpZXc9JHNpdGVbJ251bV9wb3N0X21haW4nXTsNCiRsaW1pdD0kcGFnZSokbWF4X3ZpZXc7DQokcGFnZSsrOw0KCmlmIChpc3NldCgkX0dFVFsnYmlkJ10pKQp7CiRyZXE9bXlzcWxfcXVlcnkoInNlbGVjdCAqIGZyb20gY29tbWVudCB3aGVyZSBzaXRlX2lkPSciLiR1c2VyX2lkLiInIGFuZCBibG9nX2lkPSciLm15c3FsX3JlYWxfZXNjYXBlX3N0cmluZygkYmlkKS4iJyBvcmRlciBieSB0aW1lIGRlc2MgbGltaXQgJGxpbWl0LCRtYXhfdmlldyIpOwp9CmVsc2UKewokcmVxPW15c3FsX3F1ZXJ5KCJzZWxlY3QgKiBmcm9tIGNvbW1lbnQgd2hlcmUgc2l0ZV9pZD0nIi4kdXNlcl9pZC4iJyBvcmRlciBieSB0aW1lIGRlc2MgbGltaXQgJGxpbWl0LCRtYXhfdmlldyIpOwp9CgokaGVhZF90aXRsZT0kTEFOR1snbWFuYWdlX2NvbW1lbnRzJ107CnJlcXVpcmVfb25jZSgnaW5jL2hlYWQucGhwJyk7CmVjaG8gJzxkaXYgaWQ9Im1lc3NhZ2UiPjwvZGl2PjxkaXYgaWQ9ImNvbnRlbnQiPjxkaXYgaWQ9Im1haW4tY29udGVudCI+JzsKZWNobyAnPGRpdiBpZD0ic2hvd19iYXIiPic7CmlmIChpc3NldCgkX0dFVFsnYmlkJ10pKQplY2hvICc8YSBocmVmPSJtYW5hZ2VfY29tbWVudC5waHAiPicuJExBTkdbJ2FsbCddLic8L2E+JzsKZWxzZQplY2hvICRMQU5HWydhbGwnXTsKZWNobyAnIHwgPGEgaHJlZj0ibWFuYWdlX2NvbW1lbnQucGhwP2l3Yj1hcHByb3ZlZCI+Jy4kTEFOR1snYXBwcm92ZWQnXS4nPC9hPiB8CjxhIGhyZWY9Im1hbmFnZV9jb21tZW50LnBocD9pd2I9dW5hcHByb3ZlZCI+Jy4kTEFOR1sndW5hcHByb3ZlZCddLic8L2E+IHwgPGEgaHJlZj0ibWFuYWdlX2NvbW1lbnQucGhwP2l3Yj1zcGFtIj4nLiRMQU5HWydzcGFtJ10uJzwvYT48L2Rpdj4nOwplY2hvICc8b2w+JzsKaWYgKCR0b3RhbCA+IDApCnsKJHJkID0gYmFzZTY0X2VuY29kZShodG1sc3BlY2lhbGNoYXJzKCRfU0VSVkVSWydSRVFVRVNUX1VSSSddKSk7Cgp3aGlsZSAoJGNvbT1teXNxbF9mZXRjaF9hcnJheSgkcmVxKSkKewokYmxvZz1teXNxbF9mZXRjaF9hcnJheShteXNxbF9xdWVyeSgic2VsZWN0IHRpdGxlLCBsaW5rIGZyb20gYmxvZyB3aGVyZSBpZD0nIi4kY29tWydibG9nX2lkJ10uIiciKSk7CgplY2hvICRpICUgMiA/ICc8bGkgY2xhc3M9InJvdzEiPicgOiAnPGxpIGNsYXNzPSJyb3cwIj4nOwppZiAoJGNvbVsndXNlcl9pZCddICE9IDApCmVjaG8gJzxhIGhyZWY9IicuJHNpdGVbJ3VybCddLicvdXNlci5waHA/aWQ9Jy4kY29tWyd1c2VyX2lkJ10uJyI+Jy5odG1sc3BlY2lhbGNoYXJzKCRjb21bJ25hbWUnXSkuJzwvYT4nOwplbHNlCmVjaG8gaHRtbHNwZWNpYWxjaGFycygkY29tWyduYW1lJ10pOwplY2hvICc8YnIgLz4nLiRMQU5HWydvbiddLicgPGEgaHJlZj0iJy4kdXNlcl9zaXRlLicvJy4kYmxvZ1snbGluayddLicueGh0bWwjY29tbWVudHMiIGFjY2Vzc2tleT0iMSI+Jy5odG1sc3BlY2lhbGNoYXJzKCRibG9nWyd0aXRsZSddKS4nPC9hPjxici8+Wycud2FrdHUoJGNvbVsndGltZSddKS4nXTxici8+Jy5iYnNtKCRjb21bJ3RleHQnXSkuJzxici8+PHNwYW4gY2xhc3M9ImFjdGlvbl9saW5rcyI+JzsKaWYgKCRjb21bJ3N0YXR1cyddID09IDEpCmVjaG8gJ1s8YSBjbGFzcz0icmVwbHkiIGhyZWY9Im1hbmFnZV9jb21tZW50LnBocD9pd2I9cmVwbHkmYW1wO2NvbWlkPScuJGNvbVsnaWQnXS4nIj4nLiRMQU5HWydyZXBseSddLic8L2E+XSAnOwppZiAoJGNvbVsnc3RhdHVzJ10gPT0gMCkKZWNobyAnWzxmb250IGNvbG9yPSJibGFjayI+Jy4kTEFOR1sndW5hcHByb3ZlZCddLic8L2ZvbnQ+XSAnOwplbHNlCmVjaG8gJ1s8YSBocmVmPSJtYW5hZ2VfY29tbWVudC5waHA/aXdiPXVuYXBwcm92ZWQmYW1wO2NvbWlkPScuJGNvbVsnaWQnXS4nJmFtcDtyZWRpcj0nLiRyZC4nIj4nLiRMQU5HWyd1bmFwcHJvdmVkJ10uJzwvYT5dICc7CgppZiAoJGNvbVsnc3RhdHVzJ10gPT0gMSkKZWNobyAnWzxmb250IGNvbG9yPSJibGFjayI+Jy4kTEFOR1snYXBwcm92ZWQnXS4nPC9mb250Pl0gJzsKZWxzZQplY2hvICdbPGEgaHJlZj0ibWFuYWdlX2NvbW1lbnQucGhwP2l3Yj1hcHByb3ZlZCZhbXA7Y29taWQ9Jy4kY29tWydpZCddLicmYW1wO3JlZGlyPScuJHJkLiciPicuJExBTkdbJ2FwcHJvdmVkJ10uJzwvYT5dICc7CgppZiAoJGNvbVsnc3RhdHVzJ10gPT0gMikKZWNobyAnWzxmb250IGNvbG9yPSJibGFjayI+Jy4kTEFOR1snc3BhbSddLic8L2ZvbnQ+XSAnOwplbHNlCmVjaG8gJ1s8YSBocmVmPSJtYW5hZ2VfY29tbWVudC5waHA/aXdiPXNwYW0mYW1wO2NvbWlkPScuJGNvbVsnaWQnXS4nJmFtcDtyZWRpcj0nLiRyZC4nIj4nLiRMQU5HWydzcGFtJ10uJzwvYT5dICc7CmVjaG8gJ1s8YSBjbGFzcz0iZGVsZXRlIiBocmVmPSJtYW5hZ2VfY29tbWVudC5waHA/aXdiPWRlbGV0ZSZhbXA7Y29taWQ9Jy4kY29tWydpZCddLicmYW1wO3JlZGlyPScuJHJkLicmYW1wO3llcz1vayI+PGZvbnQgY29sb3I9InJlZCI+Jy4kTEFOR1snZGVsZXRlJ10uJzwvZm9udD48L2E+XTwvc3Bhbj4nOworKyRpOwplY2hvICc8L2xpPic7Cn0KfQplbHNlCnsKZWNobyAnPGxpPicuJExBTkdbJ2VtcHR5J10uJzwvbGk+JzsKfQplY2hvICc8L29sPjwvZGl2Pic7CmlmIChpc3NldCgkX0dFVFsnYmlkJ10pKQokbGluaz0nbWFuYWdlX2NvbW1lbnQucGhwP2JpZD0nLmh0bWxlbnRpdGllcygkYmlkKS4nJmFtcDtwYWdlPSc7CmVsc2UKJGxpbms9J21hbmFnZV9jb21tZW50LnBocD9wYWdlPSc7CiRxPScnOwpwYWdpbmF0aW9uKCRwYWdlLCRtYXhfdmlldywkdG90YWwsJGxpbmssJHEpOwplY2hvICc8L2Rpdj4nOwpyZXF1aXJlX29uY2UoJ2luYy9mb290LnBocCcpOwp9Cg=="));
?>