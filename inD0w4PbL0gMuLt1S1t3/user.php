<?php
/*
*Nama Script: IndoWapBlog Multi Site
*Pembuat: Achunk JealousMan
*Email: achunk17[at]gmail[dot]com
*Situs: http://indowapblog.com
*Facebook: http://www.facebook.com/achunks
*/

eval(base64_decode("CgovKgoqTmFtYSBTY3JpcHQ6IEluZG9XYXBCbG9nIE11bHRpIFNpdGUKKlZlcnNpOiAoTGloYXQgVkVSU0lPTi50eHQpCipQZW1idWF0OiBBY2h1bmsgSmVhbG91c01hbgoqRW1haWw6IGFjaHVuazE3W2F0XWdtYWlsW2RvdF1jb20KKlNpdHVzOiBodHRwOi8vaW5kb3dhcGJsb2cuY29tCipGYWNlYm9vazogaHR0cDovL3d3dy5mYWNlYm9vay5jb20vYWNodW5rcwoqLwoKZGVmaW5lKCdfSVdCXycsIDEpOwpyZXF1aXJlX29uY2UoJ2luYy9pbmRvd2FwYmxvZy5waHAnKTsKJGl3Yj1pc3NldCgkX0dFVFsnaXdiJ10pID8gdHJpbSgkX0dFVFsnaXdiJ10pIDogJyc7CnN3aXRjaCAoJGl3YikKewpjYXNlICdwaG9uZV9udW1iZXInOgppZiAoISR1c2VyX2lkKQpyZWxvZ2luKCk7CiRoZWFkX3RpdGxlPSRMQU5HWydwaG9uZV9udW1iZXInXTsKcmVxdWlyZV9vbmNlKCdpbmMvaGVhZC5waHAnKTsKZWNobyAnPGRpdiBpZD0ibWVzc2FnZSI+JzsKZWNobyAnPC9kaXY+JzsKZWNobyAnPGRpdiBpZD0iY29udGVudCI+CjxkaXYgaWQ9Im1haW4tY29udGVudCI+JzsKZWNobyAnPGRpdiBpZD0ic2hvd19iYXIiPjxhIGhyZWY9InVzZXIucGhwIj4nLiRMQU5HWydwcm9maWxlJ10uJzwvYT4gfCA8YSBocmVmPSJ1c2VyLnBocD9pd2I9ZWRpdCI+Jy4kTEFOR1snZWRpdCddLic8L2E+IHwgPGEgaHJlZj0idXNlci5waHA/aXdiPXVwbG9hZCI+Jy4kTEFOR1sndXBsb2FkX3Bob3RvJ10uJzwvYT4gfCA8YSBocmVmPSJ1c2VyLnBocD9pd2I9cGFzc3dvcmQiPicuJExBTkdbJ2NoYW5nZV9wYXNzd29yZCddLic8L2E+PC9kaXY+JzsKaWYgKGlzc2V0KCRfUE9TVFsnY29uZmlybSddKSkKewoka29kZSA9ICI8Ii5odG1sZW50aXRpZXMoJF9QT1NUWydjb2RlJ10pLiI+IjsKaWYgKHByZWdfbWF0Y2goIiMiLiRrb2RlLiIjcyIsJGluZG93YXBibG9nWydub19ocCddKSkKewokaHAgPSBzdHJfcmVwbGFjZSgka29kZSwiIiwkaW5kb3dhcGJsb2dbJ25vX2hwJ10pOwpteXNxbF9xdWVyeSgiVVBEQVRFIHVzZXIgU0VUIG5vX2hwPSciLm15c3FsX3JlYWxfZXNjYXBlX3N0cmluZygkaHApLiInIFdIRVJFIGlkPSciLiR1c2VyX2lkLiInIik7CmVjaG8gJExBTkdbJ2NvbmZpcm1hdGlvbl9zdWNjZXNzZnVsbHknXTsKfQplbHNlIHsKZWNobyAkTEFOR1snaW5jb3JyZWN0X2NvbmZpcm1fY29kZSddOwp9Cn0KZWxzZWlmIChpc3NldCgkX1BPU1RbJ3NhdmUnXSkpCnsKJGNjID0gc3RyX3JlcGxhY2UoJysnLCcnLCRfUE9TVFsnY2MnXSk7CiRocCA9ICRfUE9TVFsnaHAnXTsKaWYgKCFjdHlwZV9kaWdpdCgkY2MpIHx8ICFjdHlwZV9kaWdpdCgkaHApKQp7CmVjaG8gJExBTkdbJ2luY29ycmVjdF9waG9uZV9udW1iZXInXTsKfQplbHNlaWYgKHN0cmxlbigkY2MpIDwgMSB8fCBzdHJsZW4oJGNjKSA+IDQgfHwgc3RybGVuKCRocCkgPCA2IHx8IHN0cmxlbigkaHApID4gMTIpCnsKZWNobyAkTEFOR1snaW5jb3JyZWN0X3Bob25lX251bWJlciddOwp9CmVsc2VpZiAobWQ1KCRfUE9TVFsncHdkJ10pICE9ICRpbmRvd2FwYmxvZ1sncGFzc3dvcmQnXSkKewplY2hvICRMQU5HWydpbmNvcnJlY3RfcGFzc3dvcmQnXTsKfQplbHNlIHsKaWYgKHN1YnN0cigkaHAsMCwxKSA9PSAiMCIpCiRocCA9IHN1YnN0cigkaHAsMSk7CiRrb2RlID0gJHVzZXJfaWQgLiByYW5kKDEwMCw5OTkpOwokcGhvbmUgPSAiWysiLiRjYy4iXSIuJGhwLiI8Ii4ka29kZS4iPiI7CiRnZXQgPSBpbXBsb2RlKCIiLGZpbGUoImh0dHA6Ly9zbWVzdGVyLm5ldC9zbXMyLnBocD9hcGk9MTMzOTY4MTg0NDM2NTExJmtvZGU9Ii4kY2MuIiZub21vcj0iLiRocC4iJnBlc2FuPSIudXJsZW5jb2RlKCJLb2RlIGtvbWZpcm1hc2kgQW5kYSBhZGFsYWggIi4ka29kZS4iLiBJbmRvV2FwQmxvZy4gICIpKSk7CmlmIChwcmVnX21hdGNoKCIjQmVyaGFzaWwjc2kiLCRnZXQpKQp7Cm15c3FsX3F1ZXJ5KCJVUERBVEUgdXNlciBTRVQgbm9faHA9JyIubXlzcWxfcmVhbF9lc2NhcGVfc3RyaW5nKCRwaG9uZSkuIicgV0hFUkUgaWQ9JyIuJHVzZXJfaWQuIiciKTsKZWNobyAiIi5zdHJfcmVwbGFjZSgiOjp2aWE6OiIsIk5vbW9yIEhhbmRwaG9uZSIsJExBTkdbJ2NvbmZpcm1fY29kZV93YXNfc2VudCddKS4iPGJyIC8+PGZvcm0gbWV0aG9kPVwicG9zdFwiIGFjdGlvbj1cInVzZXIucGhwP2l3Yj1waG9uZV9udW1iZXJcIj48aDQ+Ii4kTEFOR1snY29kZSddLiI8L2g0PjxpbnB1dCBjbGFzcz1cIml3Yi10ZXh0XCIgdHlwZT1cInRleHRcIiBuYW1lPVwiY29kZVwiIHZhbHVlPVwiXCIvPjxiciA+PGlucHV0IGNsYXNzPVwiaXdiLWJ1dHRvblwiIHR5cGU9XCJzdWJtaXRcIiBuYW1lPVwiY29uZmlybVwiIHZhbHVlPVwiIi4kTEFOR1snY29uZmlybSddLiJcIi8+PC9mb3JtPjxiciAvPiI7Cn0KZWxzZSB7CmVjaG8gJExBTkdbJ3NlcnZpY2Vfbm90X2F2YWlsYWJsZSddOwp9Cn0KfQplbHNlIHsKaWYgKHByZWdfbWF0Y2goIiM8I3NpIiwkaW5kb3dhcGJsb2dbJ25vX2hwJ10pKQokbXlIUCA9ICIiOwplbHNlCiRteUhQID0gc3RyX3JlcGxhY2UoIlsiLCIiLHN0cl9yZXBsYWNlKCJdIiwiIiwkaW5kb3dhcGJsb2dbJ25vX2hwJ10pKTsKZWNobyAnPGI+Jy4kTEFOR1sncGhvbmVfbnVtYmVyJ10uJzogJy4kbXlIUC4nPC9iPjxiciAvPjxmb3JtIG1ldGhvZD0icG9zdCIKYWN0aW9uPSJ1c2VyLnBocD9pd2I9cGhvbmVfbnVtYmVyIj4nOwplY2hvICc8dGFibGUgYm9yZGVyPSIwIj48dHI+PHRkPjxiPkNDPC9iPjwvdGQ+PHRkPjxiPkhQPC9iPjwvdGQ+PHRyPjx0ZD48aW5wdXQgY2xhc3M9Iml3Yi10ZXh0IgpuYW1lPSJjYyIgdHlwZT0idGV4dCIgdmFsdWU9IiIKbWF4bGVuZ3RoPSI0IiBzaXplPSI1Ii8+PC90ZD48dGQ+PGlucHV0IGNsYXNzPSJpd2ItdGV4dCIKbmFtZT0iaHAiIHR5cGU9InRleHQiIHZhbHVlPSIiCm1heGxlbmd0aD0iMTIiIHNpemU9IjI1Ii8+PC90ZD48L3RyPjwvdGFibGU+PGJyLz5DQzogJy4kTEFOR1snY291bnRyeV9jb2RlJ10uJzxiciAvPkhQOiAnLiRMQU5HWydwaG9uZV9udW1iZXInXS4nPGJyIC8+PGg0PicuJExBTkdbJ3Bhc3N3b3JkJ10uJzwvaDQ+CiAgICA8aW5wdXQgY2xhc3M9Iml3Yi10ZXh0IgpuYW1lPSJwd2QiIHR5cGU9InBhc3N3b3JkIiB2YWx1ZT0iIgptYXhsZW5ndGg9IjEyIiBzaXplPSIzMCIvPjxici8+ICAgIDxpbnB1dCBjbGFzcz0iaXdiLWJ1dHRvbiIgbmFtZT0ic2F2ZSIgdHlwZT0ic3VibWl0IiB2YWx1ZT0iJy4kTEFOR1snc2VuZCddLiciLz48L2Zvcm0+PGJyLz4nOwplY2hvICI8ZGl2IGNsYXNzPVwicm93MVwiPjxmb3JtIG1ldGhvZD1cInBvc3RcIiBhY3Rpb249XCJ1c2VyLnBocD9pd2I9cGhvbmVfbnVtYmVyXCI+PGg0PiIuJExBTkdbJ2NvZGUnXS4iPC9oND48aW5wdXQgY2xhc3M9XCJpd2ItdGV4dFwiIHR5cGU9XCJ0ZXh0XCIgbmFtZT1cImNvZGVcIiB2YWx1ZT1cIlwiLz48YnIgPjxpbnB1dCBjbGFzcz1cIml3Yi1idXR0b25cIiB0eXBlPVwic3VibWl0XCIgbmFtZT1cImNvbmZpcm1cIiB2YWx1ZT1cIiIuJExBTkdbJ2NvbmZpcm0nXS4iXCIvPjwvZm9ybT48L2Rpdj48YnIgLz4iOwp9CmVjaG8gJzwvZGl2PjwvZGl2Pic7CnJlcXVpcmVfb25jZSgnaW5jL2Zvb3QucGhwJyk7CmJyZWFrOwoKY2FzZSAnc2VhcmNoJzoKaWYgKCEkdXNlcl9pZCkKcmVsb2dpbigpOwokbmFtYT0kX0dFVFsnbmFtZSddOwokdG90YWw9bXlzcWxfcmVzdWx0KG15c3FsX3F1ZXJ5KCJTRUxFQ1QgQ09VTlQoKikgRlJPTSB1c2VyIFdIRVJFIG5hbWUgTElLRSAnJSIubXlzcWxfcmVhbF9lc2NhcGVfc3RyaW5nKCRuYW1hKS4iJSciKSwgMCk7CiRoZWFkX3RpdGxlPSRMQU5HWydzZWFyY2gnXTsKcmVxdWlyZV9vbmNlKCdpbmMvaGVhZC5waHAnKTsKZWNobyAnPGRpdiBpZD0ibWVzc2FnZSI+PC9kaXY+PGRpdiBpZD0iY29udGVudCI+PGRpdiBpZD0ibWFpbi1jb250ZW50Ij4nOwplY2hvICc8aDQ+Jy4kTEFOR1snc2VhcmNoJ10uJzwvaDQ+PGZvcm0gYWN0aW9uPSInLiRzaXRlWyd1cmwnXS4nL3VzZXIucGhwIiBtZXRob2Q9ImdldCI+PGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iaXdiIiB2YWx1ZT0ic2VhcmNoIi8+PGRpdiBjbGFzcz0idHdvLWNvbC1idG4iPjxpbnB1dCBjbGFzcz0iaXdiLXRleHQiIG5hbWU9Im5hbWUiIHR5cGU9InRleHQiIHZhbHVlPSInLmh0bWxzcGVjaWFsY2hhcnMoJG5hbWEpLiciLz48aW5wdXQgY2xhc3M9Iml3Yi1idXR0b24iIHR5cGU9InN1Ym1pdCIgc3R5bGU9IndpZHRoOiA1MCUiIHZhbHVlPSInLiRMQU5HWydzZWFyY2hfc3VibWl0J10uJyIvPjwvZGl2PjwvZm9ybT4nOwoKaWYgKCR0b3RhbCA9PSAwKQp7CmVjaG8gJzxwPicuc3RyX3JlcGxhY2UoJzo6bnVtYmVyOjonLCR0b3RhbCxzdHJfcmVwbGFjZSgnOjpxdWVyeTo6JyxodG1sc3BlY2lhbGNoYXJzKCRuYW1hKSwkTEFOR1snc2VhcmNoX3Jlc3VsdCddKSkuJzwvcD4nOwp9CmVsc2UKewokcGFnZT0kX0dFVFsncGFnZSddOwppZiAoIWN0eXBlX2RpZ2l0KCRwYWdlKSB8fCBlbXB0eSgkcGFnZSkgfHwgJHBhZ2UgPT0gMCB8fCAkcGFnZSA+IChjZWlsKCR0b3RhbCAvICRzaXRlWydudW1fcG9zdF9tYWluJ10pKSkKJHBhZ2U9JzEnOwokcGFnZS0tOwokbWF4X3ZpZXc9JHNpdGVbJ251bV9wb3N0X21haW4nXTsKJGxpbWl0PSRwYWdlKiRtYXhfdmlldzsKJHBhZ2UrKzsKJHJlcT1teXNxbF9xdWVyeSgiU0VMRUNUIGlkLCBuYW1lLCBhdXRob3IsIGFkbWluLCBkYXRlX3JlZyBGUk9NIHVzZXIgV0hFUkUgbmFtZSBMSUtFICclIi5teXNxbF9yZWFsX2VzY2FwZV9zdHJpbmcoJG5hbWEpLiIlJyBPUkRFUiBCWSBkYXRlX3JlZyBERVNDIExJTUlUICRsaW1pdCwkbWF4X3ZpZXciKTsKZWNobyAnRGl0ZW11a2FuICcuJHRvdGFsLicgdW50dWsgcGVuY2FyaWFuICcuaHRtbHNwZWNpYWxjaGFycygkbmFtYSkuJy48YnIgLz48dWw+JzsKd2hpbGUgKCRyZXM9bXlzcWxfZmV0Y2hfYXJyYXkoJHJlcSkpCnsKZWNobyAkaSAlIDIgPyAnPGxpIGNsYXNzPSJyb3cxIj4nIDogJzxsaSBjbGFzcz0icm93MCI+JzsKZWNobyAnPGltZyBzcmM9ImltZy5waHA/aW1nPScuJHJlc1snaWQnXS4nLmpwZyZhbXA7dz00MCZhbXA7aD00MCIgYWx0PSInLmh0bWxzcGVjaWFsY2hhcnMoJHJlc1snbmFtZSddKS4nIiAvPiAnOwppZiAoKCRyZXNbJ2F1dGhvciddID09ICcxJykgJiYgKCRyZXNbJ2FkbWluJ10gPT0gJzAnKSkKewokZm9udD0iZ3JlZW4iOwp9CmVsc2VpZiAoKCRyZXNbJ2F1dGhvciddID09ICcyJykgJiYgKCRyZXNbJ2FkbWluJ10gPT0gJzAnKSkKewokZm9udD0icmVkIjsKfQplbHNlaWYgKCgkcmVzWydhdXRob3InXSA9PSAnMycpICYmICgkcmVzWydhZG1pbiddID09ICcwJykpCnsKJGZvbnQ9ImJsdWUiOwp9CmVsc2VpZiAoKCRyZXNbJ2F1dGhvciddID09ICc0JykgJiYgKCRyZXNbJ2FkbWluJ10gPT0gJzAnKSkKewokZm9udD0ieWVsbG93IjsKfQplbHNlaWYgKCRyZXNbJ2FkbWluJ10gPT0gJzEnKQp7CiRmb250PSIjNzMxMTc0IjsKfQplbHNlCnsKJGZvbnQ9ImJsYWNrIjsKfQoKZWNobyAnPGEgaHJlZj0idXNlci5waHA/aWQ9Jy4kcmVzWydpZCddLiciPjxmb250IGNvbG9yPSInLiRmb250LiciPicuaHRtbHNwZWNpYWxjaGFycygkcmVzWyduYW1lJ10pLic8L2ZvbnQ+PC9hPic7CisrJGk7CmVjaG8gJzwvbGk+JzsKfQokbGluaz0ndXNlci5waHA/aXdiPXNlYXJjaCZhbXA7bmFtZT0nLmh0bWxlbnRpdGllcyh1cmxlbmNvZGUoJG5hbWEpKS4nJmFtcDtwYWdlPSc7CiRxPScnOwpwYWdpbmF0aW9uKCRwYWdlLCRtYXhfdmlldywkdG90YWwsJGxpbmssJHEpOwplY2hvICc8L3VsPic7Cn0KZWNobyAnPC9kaXY+PC9kaXY+JzsKcmVxdWlyZV9vbmNlKCdpbmMvZm9vdC5waHAnKTsKCmJyZWFrOwoKY2FzZSAnbGlzdCc6CmlmICghJHVzZXJfaWQpCnJlbG9naW4oKTsKJHZpZXc9aXNzZXQoJF9HRVRbJ3ZpZXcnXSk/IHRyaW0oJF9HRVRbJ3ZpZXcnXSkgOiAnJzsKJHBhZ2U9JF9HRVRbJ3BhZ2UnXTsKaWYgKCR2aWV3ID09ICdtZW1iZXInKQp7CiR0b3RhbD1teXNxbF9yZXN1bHQobXlzcWxfcXVlcnkoInNlbGVjdCBjb3VudCgqKSBhcyBudW0gZnJvbSB1c2VyIHdoZXJlIGF1dGhvcj0nMCcgYW5kIGJhbj0nMCciKSwgMCk7CiRoZWFkX3RpdGxlPSdMaXN0IE1lbWJlcic7Cn0KZWxzZWlmICgkdmlldyA9PSAnYmFuJykKewokdG90YWw9bXlzcWxfcmVzdWx0KG15c3FsX3F1ZXJ5KCJzZWxlY3QgY291bnQoKikgYXMgbnVtIGZyb20gdXNlciB3aGVyZSBiYW49JzEnIiksIDApOwokaGVhZF90aXRsZT0nTWVtYmVyIERpYmxva2lyJzsKfQplbHNlaWYgKCR2aWV3ID09ICdhdXRob3InKQp7CiR0b3RhbD1teXNxbF9yZXN1bHQobXlzcWxfcXVlcnkoInNlbGVjdCBjb3VudCgqKSBhcyBudW0gZnJvbSB1c2VyIHdoZXJlIGF1dGhvcj0nMScgYW5kIGJhbj0nMCciKSwgMCk7CiRoZWFkX3RpdGxlPSdMaXN0IFBlbnVsaXMnOwp9CmVsc2VpZiAoJHZpZXcgPT0gJ2FkbWluJykKewokdG90YWw9bXlzcWxfcmVzdWx0KG15c3FsX3F1ZXJ5KCJzZWxlY3QgY291bnQoKikgYXMgbnVtIGZyb20gdXNlciB3aGVyZSBhZG1pbj0nMSciKSwgMCk7CiRoZWFkX3RpdGxlPSdMaXN0IEFkbWluaXN0cmF0b3InOwp9CmVsc2VpZiAoJHZpZXcgPT0gJ25vdGxvZ2luJykKewokdG90YWw9bXlzcWxfcmVzdWx0KG15c3FsX3F1ZXJ5KCJzZWxlY3QgY291bnQoKikgYXMgbnVtIGZyb20gdXNlciB3aGVyZSBsYXN0ZGF0ZT0nJyIpLCAwKTsKJGhlYWRfdGl0bGU9J0JlbHVtIE1hc3VrJzsKfQplbHNlCnsKJHRvdGFsPW15c3FsX3Jlc3VsdChteXNxbF9xdWVyeSgic2VsZWN0IGNvdW50KCopIGFzIG51bSBmcm9tIHVzZXIiKSwgMCk7CiRoZWFkX3RpdGxlPSdMaXN0IFBlbmdndW5hJzsKfQppZiAoIWN0eXBlX2RpZ2l0KCRwYWdlKSB8fCBlbXB0eSgkcGFnZSkgfHwgJHBhZ2UgPT0gMCB8fCAkcGFnZSA+IChjZWlsKCR0b3RhbCAvICRzaXRlWydudW1fcG9zdF9tYWluJ10pKSkKJHBhZ2U9JzEnOwokcGFnZS0tOwokbWF4X3ZpZXc9JHNpdGVbJ251bV9wb3N0X21haW4nXTsKJGxpbWl0PSRwYWdlKiRtYXhfdmlldzsKJHBhZ2UrKzsKcmVxdWlyZV9vbmNlKCdpbmMvaGVhZC5waHAnKTsKZWNobyAnPGRpdiBpZD0ibWVzc2FnZSI+JzsKZWNobyAnPC9kaXY+JzsKZWNobyAnPGRpdiBpZD0iY29udGVudCI+CjxkaXYgaWQ9Im1haW4tY29udGVudCI+JzsKZWNobyAnPGRpdiBpZD0ic2hvd19iYXIiPic7CmlmIChlbXB0eSgkdmlldykpCmVjaG8gJExBTkdbJ2FsbCddOwplbHNlCmVjaG8gJzxhIGhyZWY9InVzZXIucGhwP2l3Yj1saXN0Ij4nLiRMQU5HWydhbGwnXS4nPC9hPic7CmVjaG8gJyB8ICc7CmlmICgkdmlldyA9PSAnbWVtYmVyJykKZWNobyAkTEFOR1snbWVtYmVyJ107CmVsc2UKZWNobyAnPGEgaHJlZj0idXNlci5waHA/aXdiPWxpc3QmYW1wO3ZpZXc9bWVtYmVyIj4nLiRMQU5HWydtZW1iZXInXS4nPC9hPic7CmVjaG8gJyB8ICc7CmlmICgkdmlldyA9PSAnYmFuJykKZWNobyAkTEFOR1snYmFuZWQnXTsKZWxzZQplY2hvICc8YSBocmVmPSJ1c2VyLnBocD9pd2I9bGlzdCZhbXA7dmlldz1iYW4iPicuJExBTkdbJ2JhbmVkJ10uJzwvYT4nOwplY2hvICcgfCAnOwppZiAoJHZpZXcgPT0gJ2F1dGhvcicpCmVjaG8gJExBTkdbJ2F1dGhvciddOwplbHNlCmVjaG8gJzxhIGhyZWY9InVzZXIucGhwP2l3Yj1saXN0JmFtcDt2aWV3PWF1dGhvciI+Jy4kTEFOR1snYXV0aG9yJ10uJzwvYT4nOwplY2hvICcgfCAnOwppZiAoJHZpZXcgPT0gJ2FkbWluJykKZWNobyAkTEFOR1snYWRtaW4nXTsKZWxzZQplY2hvICc8YSBocmVmPSJ1c2VyLnBocD9pd2I9bGlzdCZhbXA7dmlldz1hZG1pbiI+Jy4kTEFOR1snYWRtaW4nXS4nPC9hPic7CmVjaG8gJyB8ICc7CmlmICgkaXNfYWRtaW4pCnsKaWYgKCR2aWV3ID09ICdub3Rsb2dpbicpCmVjaG8gJExBTkdbJ25vdF9sb2dpbiddOwplbHNlCmVjaG8gJzxhIGhyZWY9InVzZXIucGhwP2l3Yj1saXN0JmFtcDt2aWV3PW5vdGxvZ2luIj4nLiRMQU5HWydub3RfbG9naW4nXS4nPC9hPic7Cn0KZWNobyAnPC9kaXY+JzsKZWNobyAnPGg0PicuJExBTkdbJ3NlYXJjaCddLic8L2g0Pjxmb3JtIGFjdGlvbj0iJy4kc2l0ZVsndXJsJ10uJy91c2VyLnBocCIgbWV0aG9kPSJnZXQiPjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9Iml3YiIgdmFsdWU9InNlYXJjaCIvPjxkaXYgY2xhc3M9InR3by1jb2wtYnRuIj48aW5wdXQgY2xhc3M9Iml3Yi10ZXh0IiBuYW1lPSJuYW1lIiB0eXBlPSJ0ZXh0IiB2YWx1ZT0iIi8+PGlucHV0IGNsYXNzPSJpd2ItYnV0dG9uIiB0eXBlPSJzdWJtaXQiIHN0eWxlPSJ3aWR0aDogNTAlIiB2YWx1ZT0iJy4kTEFOR1snc2VhcmNoX3N1Ym1pdCddLiciLz48L2Rpdj48L2Zvcm0+PGJyIC8+JzsKaWYgKCR2aWV3ID09ICdtZW1iZXInKQp7CiRyZXE9bXlzcWxfcXVlcnkoInNlbGVjdCAqIGZyb20gdXNlciB3aGVyZSBhdXRob3I9JzAnIGFuZCBiYW49JzAnIG9yZGVyIGJ5IGlkIGRlc2MgbGltaXQgJGxpbWl0LCRtYXhfdmlldyIpOwp9CmVsc2VpZiAoJHZpZXcgPT0gJ2JhbicpCnsKJHJlcT1teXNxbF9xdWVyeSgic2VsZWN0ICogZnJvbSB1c2VyIHdoZXJlIGJhbj0nMScgb3JkZXIgYnkgaWQgZGVzYyBsaW1pdCAkbGltaXQsJG1heF92aWV3Iik7Cn0KZWxzZWlmICgkdmlldyA9PSAnYXV0aG9yJykKewokcmVxPW15c3FsX3F1ZXJ5KCJzZWxlY3QgKiBmcm9tIHVzZXIgd2hlcmUgYXV0aG9yPScxJyBhbmQgYmFuPScwJyBvcmRlciBieSBpZCBkZXNjIGxpbWl0ICRsaW1pdCwkbWF4X3ZpZXciKTsKfQplbHNlaWYgKCR2aWV3ID09ICdhZG1pbicpCnsKJHJlcT1teXNxbF9xdWVyeSgic2VsZWN0ICogZnJvbSB1c2VyIHdoZXJlIGFkbWluPScxJyBvcmRlciBieSBpZCBkZXNjIGxpbWl0ICRsaW1pdCwkbWF4X3ZpZXciKTsKfQplbHNlaWYgKCR2aWV3ID09ICdub3Rsb2dpbicpCnsKJHJlcT1teXNxbF9xdWVyeSgic2VsZWN0ICogZnJvbSB1c2VyIHdoZXJlIGxhc3RkYXRlPScnIG9yZGVyIGJ5IGlkIGFzYyBsaW1pdCAkbGltaXQsJG1heF92aWV3Iik7Cn0KZWxzZQp7CiRyZXE9bXlzcWxfcXVlcnkoInNlbGVjdCAqIGZyb20gdXNlciBvcmRlciBieSBpZCBkZXNjIGxpbWl0ICRsaW1pdCwkbWF4X3ZpZXciKTsKfQppZiAoJHRvdGFsID4gMCkKewplY2hvICc8dWw+JzsKd2hpbGUgKCRyZXM9bXlzcWxfZmV0Y2hfYXJyYXkoJHJlcSkpCnsKZWNobyAkaSAlIDIgPyAnPGxpIGNsYXNzPSJyb3cxIj4nIDogJzxsaSBjbGFzcz0icm93MCI+JzsKZWNobyAnPGltZyBzcmM9ImltZy5waHA/aW1nPScuJHJlc1snaWQnXS4nLmpwZyZhbXA7dz00MCZhbXA7aD00MCIgYWx0PSInLmh0bWxzcGVjaWFsY2hhcnMoJHJlc1snbmFtZSddKS4nIiAvPiAnOwoKaWYgKCgkcmVzWydhdXRob3InXSA9PSAnMScpICYmICgkcmVzWydhZG1pbiddID09ICcwJykpCnsKJGZvbnQ9ImdyZWVuIjsKfQplbHNlaWYgKCgkcmVzWydhdXRob3InXSA9PSAnMicpICYmICgkcmVzWydhZG1pbiddID09ICcwJykpCnsKJGZvbnQ9InJlZCI7Cn0KZWxzZWlmICgoJHJlc1snYXV0aG9yJ10gPT0gJzMnKSAmJiAoJHJlc1snYWRtaW4nXSA9PSAnMCcpKQp7CiRmb250PSJibHVlIjsKfQplbHNlaWYgKCgkcmVzWydhdXRob3InXSA9PSAnNCcpICYmICgkcmVzWydhZG1pbiddID09ICcwJykpCnsKJGZvbnQ9InllbGxvdyI7Cn0KZWxzZWlmICgkcmVzWydhZG1pbiddID09ICcxJykKewokZm9udD0iIzczMTE3NCI7Cn0KZWxzZQp7CiRmb250PSJibGFjayI7Cn0KCmVjaG8gJzxhIGhyZWY9InVzZXIucGhwP2lkPScuJHJlc1snaWQnXS4nIj48Zm9udCBjb2xvcj0iJy4kZm9udC4nIj4nLmh0bWxzcGVjaWFsY2hhcnMoJHJlc1snbmFtZSddKS4nPC9mb250PjwvYT4nOworKyRpOwplY2hvICc8L2xpPic7Cn0KZWNobyAnPC91bD4nOwp9CmVsc2UKewplY2hvICc8cD4nLiRoZWFkX3RpdGxlLicgJy4kTEFOR1snZW1wdHknXS4nPC9wPic7Cn0KZWNobyAnPC9kaXY+JzsKaWYgKGVtcHR5KCR2aWV3KSkKJGxpbms9J3VzZXIucGhwP2l3Yj1saXN0JmFtcDtwYWdlPSc7CmVsc2UKJGxpbms9J3VzZXIucGhwP2l3Yj1saXN0JmFtcDt2aWV3PScuaHRtbGVudGl0aWVzKCR2aWV3KS4nJmFtcDtwYWdlPSc7CiRxPScnOwpwYWdpbmF0aW9uKCRwYWdlLCRtYXhfdmlldywkdG90YWwsJGxpbmssJHEpOwplY2hvICc8L2Rpdj4nOwpyZXF1aXJlX29uY2UoJ2luYy9mb290LnBocCcpOwpicmVhazsKCmNhc2UgJ2VtYWlsJzoKaWYgKCEkdXNlcl9pZCkKcmVsb2dpbigpOwppZiAoaXNzZXQoJF9QT1NUWydjaGFuZ2UnXSkpCnsKJHB3ZD1tZDUoJF9QT1NUWydwd2QnXSk7CiRlbWFpbD1zdHJ0b2xvd2VyKCRfUE9TVFsnZW1haWwnXSk7CiRlcnI9J01hYWYgZW1haWwgdGlkYWsgYmlzYSBkaXJ1YmFoLiBVbnR1ayBtZXJ1YmFobnlhIGhhcmFwIGh1YnVuZ2kgQWRtaW5pc3RyYXRvci4nOwppZiAoJGluZG93YXBibG9nWydwYXNzd29yZCddICE9ICRwd2QpCiRlcnI9JExBTkdbJ2luY29ycmVjdF9wYXNzd29yZCddOwppZiAobWJfc3RybGVuKCRlbWFpbCkgPCAyIHx8IG1iX3N0cmxlbigkZW1haWwpID4gMjUwKQokZXJyPSRMQU5HWydsZW5naHRfZW1haWwnXTsKaWYgKCFlcmVnaSgiXlthLXowLTlcLl8tXStAW2EtejAtOVwuXy1dK1wuW2Etel17Miw0fVwkIiwgJGVtYWlsKSkKJGVycj0kTEFOR1snaW5jb3JyZWN0X2VtYWlsJ107CmlmIChlbXB0eSgkZW1haWwpKQokZXJyPSRMQU5HWydlbXB0eV9lbWFpbCddOwokY2hlY2tfZW1haWw9bXlzcWxfcXVlcnkoInNlbGVjdCAqIGZyb20gYHVzZXJgIHdoZXJlIGBlbWFpbGA9JyIubXlzcWxfcmVhbF9lc2NhcGVfc3RyaW5nKCRlbWFpbCkuIiciKTsKaWYgKG15c3FsX251bV9yb3dzKCRjaGVja19lbWFpbCkgIT0gMCkKJGVycj0kTEFOR1snZW1haWxfd2FzX3VzZWQnXTsKaWYgKGVtcHR5KCRlcnIpKQp7Cm15c3FsX3F1ZXJ5KCJ1cGRhdGUgdXNlciBzZXQgZW1haWw9JyIubXlzcWxfcmVhbF9lc2NhcGVfc3RyaW5nKCRlbWFpbCkuIicgd2hlcmUgaWQ9JyIuJHVzZXJfaWQuIiciKTsKJGhzbD0nPG9sIGlkPSJzdWNjZXNzIj48bGk+Jy4kTEFOR1snY2hhbmdlX3NhdmVkJ10uJzwvbGk+PC9vbD4nOwp9CmVsc2UKewokaHNsPSc8b2wgaWQ9ImVycm9yIj48bGk+Jy4kZXJyLic8L2xpPjwvb2w+JzsKfQp9CiRoZWFkX3RpdGxlPSRMQU5HWydjaGFuZ2VfZW1haWwnXTsKcmVxdWlyZV9vbmNlKCdpbmMvaGVhZC5waHAnKTsKZWNobyAnPGRpdiBpZD0ibWVzc2FnZSI+JzsKaWYgKCFlbXB0eSgkaHNsKSkKZWNobyAkaHNsOwplY2hvICc8L2Rpdj4nOwplY2hvICc8ZGl2IGlkPSJjb250ZW50Ij4KPGRpdiBpZD0ibWFpbi1jb250ZW50Ij4nOwplY2hvICc8ZGl2IGlkPSJzaG93X2JhciI+PGEgaHJlZj0idXNlci5waHAiPicuJExBTkdbJ3Byb2ZpbGUnXS4nPC9hPiB8IDxhIGhyZWY9InVzZXIucGhwP2l3Yj1lZGl0Ij4nLiRMQU5HWydlZGl0J10uJzwvYT4gfCA8YSBocmVmPSJ1c2VyLnBocD9pd2I9dXBsb2FkIj4nLiRMQU5HWyd1cGxvYWRfcGhvdG8nXS4nPC9hPiB8IDxhIGhyZWY9InVzZXIucGhwP2l3Yj1wYXNzd29yZCI+Jy4kTEFOR1snY2hhbmdlX3Bhc3N3b3JkJ10uJzwvYT48L2Rpdj4nOwplY2hvICc8Zm9ybSBtZXRob2Q9InBvc3QiCmFjdGlvbj0idXNlci5waHA/aXdiPWVtYWlsIj4nOwoKZWNobyAnPGg0PicuJExBTkdbJ2VtYWlsJ10uJzwvaDQ+CiAgICA8aW5wdXQgY2xhc3M9Iml3Yi10ZXh0IgpuYW1lPSJlbWFpbCIgdHlwZT0idGV4dCIgdmFsdWU9IicuaHRtbHNwZWNpYWxjaGFycygkdXNlcl9lbWFpbCkuJyIKbWF4bGVuZ3RoPSIyNTUiIHNpemU9IjMwIi8+PGJyLz48aDQ+Jy4kTEFOR1sncGFzc3dvcmQnXS4nPC9oND4KICAgIDxpbnB1dCBjbGFzcz0iaXdiLXRleHQiCm5hbWU9InB3ZCIgdHlwZT0icGFzc3dvcmQiIHZhbHVlPSIiCm1heGxlbmd0aD0iMTIiIHNpemU9IjMwIi8+PGJyLz4gICAgPGlucHV0IGNsYXNzPSJpd2ItYnV0dG9uIiBuYW1lPSJjaGFuZ2UiIHR5cGU9InN1Ym1pdCIgdmFsdWU9IicuJExBTkdbJ3NhdmUnXS4nIi8+PC9mb3JtPjxici8+JzsKZWNobyAnPC9kaXY+PC9kaXY+JzsKcmVxdWlyZV9vbmNlKCdpbmMvZm9vdC5waHAnKTsKYnJlYWs7CgpjYXNlICdlZGl0JzoKaWYgKCEkdXNlcl9pZCkKcmVsb2dpbigpOwoKaWYgKGlzc2V0KCRfUE9TVFsnc2F2ZSddKSkKewppZiAoISR1c2VyX2lkKQpyZWxvZ2luKCk7CgokbmFtZT0kX1BPU1RbJ25hbWUnXTsKJGdlbmRlcj0kX1BPU1RbJ2dlbmRlciddOwokYmlydGhkYXk9JF9QT1NUWydiaXJ0aGRheSddOwokYWRkcmVzcz0kX1BPU1RbJ2xvY2F0aW9uJ107CiRhYm91dD0kX1BPU1RbJ2Fib3V0J107CmlmICgkbmFtZSAhPSAkdXNlcl9uYW1lICYmICRpbmRvd2FwYmxvZ1snY3JlZGl0J10gPCAzMDApCiRlcnJvciA9ICdQZXJ1YmFoYW4gTmFtYSBkaWtlbmFrYW4ga3JlZGl0IFJwIDMwMCc7CgppZiAobWJfc3RybGVuKCRuYW1lKSA8IDIgfHwgbWJfc3RybGVuKCRuYW1lKSA+IDQwKQokZXJyb3I9JExBTkdbJ2xlbmdodF9uYW1lJ107CmlmIChlbXB0eSgkbmFtZSkpCiRlcnJvcj0kTEFOR1snZW1wdHlfbmFtZSddOwppZiAocHJlZ19tYXRjaCgiL1teYS16QS1aMC05XCBcLVwuXEBce1x9XF9dLyIsICRuYW1lKSkNCiRlcnJvcj0kTEFOR1snaW5jb3JyZWN0X25hbWUnXTsNCmlmIChzdWJzdHIoJG5hbWUsMCwxKSA9PSAnICcgfHwgc3Vic3RyKCRuYW1lLC0xKSA9PSAnICcpCiRlcnJvcj0kTEFOR1snaW5jb3JyZWN0X25hbWUnXTsKaWYgKCFlcmVnaSgiXlswLTldezJ9LVswLTldezJ9LVswLTldezR9XCQiLCAkYmlydGhkYXkpKQokZXJyb3I9JExBTkdbJ2Zvcm1hdF9iaXJ0aGRheSddOwoKaWYgKGVtcHR5KCRlcnJvcikpCnsKaWYgKCRuYW1lID09ICR1c2VyX25hbWUpIHsKbXlzcWxfcXVlcnkoInVwZGF0ZSB1c2VyIHNldCBuYW1lPSciLm15c3FsX3JlYWxfZXNjYXBlX3N0cmluZygkbmFtZSkuIicsIGdlbmRlcj0nIi5teXNxbF9yZWFsX2VzY2FwZV9zdHJpbmcoJGdlbmRlcikuIicsIGJpcnRoZGF5PSciLm15c3FsX3JlYWxfZXNjYXBlX3N0cmluZygkYmlydGhkYXkpLiInLCBhZGRyZXNzPSciLm15c3FsX3JlYWxfZXNjYXBlX3N0cmluZygkYWRkcmVzcykuIicsIGFib3V0PSciLm15c3FsX3JlYWxfZXNjYXBlX3N0cmluZygkYWJvdXQpLiInIHdoZXJlIGlkPSciLiR1c2VyX2lkLiInIik7Cn0KZWxzZSB7CiRrciA9ICRpbmRvd2FwYmxvZ1snY3JlZGl0J10gLSAzMDA7Cm15c3FsX3F1ZXJ5KCJ1cGRhdGUgdXNlciBzZXQgbmFtZT0nIi5teXNxbF9yZWFsX2VzY2FwZV9zdHJpbmcoJG5hbWUpLiInLCBnZW5kZXI9JyIubXlzcWxfcmVhbF9lc2NhcGVfc3RyaW5nKCRnZW5kZXIpLiInLCBiaXJ0aGRheT0nIi5teXNxbF9yZWFsX2VzY2FwZV9zdHJpbmcoJGJpcnRoZGF5KS4iJywgYWRkcmVzcz0nIi5teXNxbF9yZWFsX2VzY2FwZV9zdHJpbmcoJGFkZHJlc3MpLiInLCBhYm91dD0nIi5teXNxbF9yZWFsX2VzY2FwZV9zdHJpbmcoJGFib3V0KS4iJywgY3JlZGl0PSciLm15c3FsX3JlYWxfZXNjYXBlX3N0cmluZygka3IpLiInIHdoZXJlIGlkPSciLiR1c2VyX2lkLiInIik7Cn0KJGhzbD0nPG9sIGlkPSJzdWNjZXNzIj48bGk+Jy4kTEFOR1snY2hhbmdlX3NhdmVkJ10uJzwvbGk+PC9vbD4nOwp9CmVsc2UKewokaHNsPSc8b2wgaWQ9ImVycm9yIj48bGk+Jy4kZXJyb3IuJzwvbGk+PC9vbD4nOwp9Cn0KCiRoZWFkX3RpdGxlPSRMQU5HWydlZGl0J107CnJlcXVpcmVfb25jZSgnaW5jL2hlYWQucGhwJyk7CmVjaG8gJzxkaXYgaWQ9Im1lc3NhZ2UiPic7CmlmICghZW1wdHkoJGhzbCkpCmVjaG8gJGhzbDsKZWNobyAnPC9kaXY+JzsKZWNobyAnPGRpdiBpZD0iY29udGVudCI+CjxkaXYgaWQ9Im1haW4tY29udGVudCI+JzsKZWNobyAnPGRpdiBpZD0ic2hvd19iYXIiPjxhIGhyZWY9InVzZXIucGhwIj4nLiRMQU5HWydwcm9maWxlJ10uJzwvYT4gfCAnLiRMQU5HWydlZGl0J10uJyB8IDxhIGhyZWY9InVzZXIucGhwP2l3Yj11cGxvYWQiPicuJExBTkdbJ3VwbG9hZF9waG90byddLic8L2E+IHwgPGEgaHJlZj0idXNlci5waHA/aXdiPXBhc3N3b3JkIj4nLiRMQU5HWydjaGFuZ2VfcGFzc3dvcmQnXS4nPC9hPjwvZGl2Pic7CmVjaG8gJzxmb3JtIG1ldGhvZD0icG9zdCIKYWN0aW9uPSJ1c2VyLnBocD9pd2I9ZWRpdCI+CjxoND4nLiRMQU5HWydwaG90byddLicgKDxhCmhyZWY9InVzZXIucGhwP2l3Yj11cGxvYWQiPicuJExBTkdbJ3VwbG9hZCddLic8L2E+KTwvaDQ+CjxpbWcgc3JjPSJpbWcucGhwP2ltZz0nLiR1c2VyX2lkLicuanBnJmFtcDt3PTgwJmFtcDtoPTgwIiBhbHQ9IicuaHRtbHNwZWNpYWxjaGFycygkaW5kb3dhcGJsb2dbJ25hbWUnXSkuJyIvPjxoND4nLiRMQU5HWyduYW1lJ10uJzwvaDQ+CiAgICA8aW5wdXQgY2xhc3M9Iml3Yi10ZXh0IgpuYW1lPSJuYW1lIiB0eXBlPSJ0ZXh0IiB2YWx1ZT0iJy5odG1sc3BlY2lhbGNoYXJzKCRpbmRvd2FwYmxvZ1snbmFtZSddKS4nIgptYXhsZW5ndGg9IjQ5IiBzaXplPSIzMCIvPjxici8+CjxoND4nLiRMQU5HWydnZW5kZXInXS4nPC9oND48c2VsZWN0IGNsYXNzPSJpd2Itc2VsZWN0IiBuYW1lPSJnZW5kZXIiPic7CmlmICgkaW5kb3dhcGJsb2dbJ2dlbmRlciddID09ICdmZW1hbGUnKQplY2hvICc8b3B0aW9uIHZhbHVlPSJmZW1hbGUiPicuJExBTkdbJ2ZlbWFsZSddLic8L29wdGlvbj48b3B0aW9uIHZhbHVlPSJtYWxlIj4nLiRMQU5HWydtYWxlJ10uJzwvb3B0aW9uPic7CmVsc2UKZWNobyAnPG9wdGlvbiB2YWx1ZT0ibWFsZSI+Jy4kTEFOR1snbWFsZSddLic8L29wdGlvbj48b3B0aW9uIHZhbHVlPSJmZW1hbGUiPicuJExBTkdbJ2ZlbWFsZSddLic8L29wdGlvbj4nOwplY2hvICc8L3NlbGVjdD48YnIvPic7CmVjaG8gJzxoND4nLiRMQU5HWydiaXJ0aGRheSddLic8L2g0PgogICAgPGlucHV0IGNsYXNzPSJpd2ItdGV4dCIgbmFtZT0iYmlydGhkYXkiIHR5cGU9InRleHQiIHZhbHVlPSInLmh0bWxlbnRpdGllcygkaW5kb3dhcGJsb2dbJ2JpcnRoZGF5J10pLiciIG1heGxlbmd0aD0iNDkiIHNpemU9IjMwIi8+PGJyLz48c3Bhbj5ISC1CQi1UVFRUPC9zcGFuPjxici8+PGg0PicuJExBTkdbJ3NpdGUnXS4nPC9oND48Yj4nLmh0bWxzcGVjaWFsY2hhcnMoJGluZG93YXBibG9nWydzaXRlJ10pLic8L2I+PGJyLz48aDQ+Jy4kTEFOR1snZW1haWwnXS4nICg8YSBocmVmPSJ1c2VyLnBocD9pd2I9ZW1haWwiPicuJExBTkdbJ2NoYW5nZSddLic8L2E+KTwvaDQ+Jy5odG1sZW50aXRpZXMoJGluZG93YXBibG9nWydlbWFpbCddKS4nPGJyLz4nOwppZiAocHJlZ19tYXRjaCgiIzwjc2kiLCRpbmRvd2FwYmxvZ1snbm9faHAnXSkpCiRteUhQID0gIiI7CmVsc2UKJG15SFAgPSBzdHJfcmVwbGFjZSgiWyIsIiIsc3RyX3JlcGxhY2UoIl0iLCIiLCRpbmRvd2FwYmxvZ1snbm9faHAnXSkpOwplY2hvICc8aDQ+Jy4kTEFOR1sncGhvbmVfbnVtYmVyJ10uJyAoPGEgaHJlZj0idXNlci5waHA/aXdiPXBob25lX251bWJlciI+Jy4kTEFOR1snY2hhbmdlJ10uJzwvYT4pPC9oND4nLmh0bWxlbnRpdGllcygkbXlIUCkuJzxici8+JzsKZWNobyAnPGg0PicuJExBTkdbJ2FkZHJlc3MnXS4nPC9oND48aW5wdXQgY2xhc3M9Iml3Yi10ZXh0IiBuYW1lPSJsb2NhdGlvbiIgdHlwZT0idGV4dCIgdmFsdWU9IicuaHRtbHNwZWNpYWxjaGFycygkaW5kb3dhcGJsb2dbJ2FkZHJlc3MnXSkuJyIgbWF4bGVuZ3RoPSIyMCIgc2l6ZT0iMzAiLz48YnIvPjxoND4nLiRMQU5HWydhYm91dCddLic8L2g0Pjx0ZXh0YXJlYSBjbGFzcz0iaXdiLXRleHRhcmVhIiBuYW1lPSJhYm91dCIgcm93cz0iMyIvPicuaHRtbHNwZWNpYWxjaGFycygkaW5kb3dhcGJsb2dbJ2Fib3V0J10pLic8L3RleHRhcmVhPgogICAgPGJyLz4KICAgIDxpbnB1dCBjbGFzcz0iaXdiLWJ1dHRvbiIgbmFtZT0ic2F2ZSIgdHlwZT0ic3VibWl0IiB2YWx1ZT0iJy4kTEFOR1snc2F2ZSddLiciLz48L2Zvcm0+JzsKCmVjaG8gJzwvZGl2PjwvZGl2Pic7CnJlcXVpcmVfb25jZSgnaW5jL2Zvb3QucGhwJyk7CgpicmVhazsKY2FzZSAncGFzc3dvcmQnOgppZiAoISR1c2VyX2lkKQpyZWxvZ2luKCk7CmlmIChpc3NldCgkX1BPU1RbJ2NoYW5nZSddKSAmJiAkdXNlcl9pZCkKewokb2xkPSRfUE9TVFsnb2xkX3Bhc3MnXTsKJHBhc3M9JF9QT1NUWyduZXdfcGFzcyddOwokcmVfcGFzcz0kX1BPU1RbJ3JlX25ld19wYXNzJ107CmlmICgkaW5kb3dhcGJsb2dbJ3Bhc3N3b3JkJ10gIT0gbWQ1KCRvbGQpKQokaGFzaWw9JzxvbCBpZD0iZXJyb3IiPjxsaT4nLiRMQU5HWydpbmNvcnJlY3RfcGFzc3dvcmQnXS4nPC9saT48L29sPic7CmlmICgkcGFzcyAhPSAkcmVfcGFzcykKJGhhc2lsPSc8b2wgaWQ9ImVycm9yIj48bGk+Jy4kTEFOR1snaW5jb3JyZWN0X3Bhc3N3b3JkJ10uJzwvbGk+PC9vbD4nOwppZiAobWJfc3RybGVuKCRwYXNzKSA8IDQgfHwgbWJfc3RybGVuKCRwYXNzKSA+IDEyKSAkaGFzaWw9JzxvbCBpZD0iZXJyb3IiPjxsaT4nLiRMQU5HWydsZW5naHRfcGFzc3dvcmQnXS4nPC9saT48L29sPic7CmlmIChlbXB0eSgkcGFzcykgfHwgZW1wdHkoJHJlX3Bhc3MpKSAkaGFzaWw9JzxvbCBpZD0iZXJyb3IiPjxsaT4nLiRMQU5HWydlbXB0eV9wYXNzd29yZCddLic8L2xpPjwvb2w+JztpZiAoZW1wdHkoJGhhc2lsKSkKewokbmV3X3Bhc3N3b3JkPW1kNSgkcGFzcyk7CiRjb29rID0gbWQ1KCR1c2VyX2lkKSAuIHN1YnN0cigkbmV3X3Bhc3N3b3JkLDAsMTcpOwokY29va2llID0gbWQ1KCRjb29rKTsKbXlzcWxfcXVlcnkoInVwZGF0ZSBgdXNlcmAgc2V0IGBwYXNzd29yZGA9JyIubXlzcWxfcmVhbF9lc2NhcGVfc3RyaW5nKCRuZXdfcGFzc3dvcmQpLiInLCBgY29va2llYD0nIi5teXNxbF9yZWFsX2VzY2FwZV9zdHJpbmcoJGNvb2tpZSkuIicgd2hlcmUgYGlkYD0nIi4kdXNlcl9pZC4iJyIpOwokaGFzaWw9JzxvbCBpZD0ic3VjY2VzcyI+PGxpPicuJExBTkdbJ2NoYW5nZV9zYXZlZCddLic8L2xpPjwvb2w+JzsKfQp9CgokaGVhZF90aXRsZT0kTEFOR1snY2hhbmdlX3Bhc3N3b3JkJ107CnJlcXVpcmVfb25jZSgnaW5jL2hlYWQucGhwJyk7CmVjaG8gJzxkaXYgaWQ9Im1lc3NhZ2UiPic7CmlmICghZW1wdHkoJGhhc2lsKSkKZWNobyAkaGFzaWw7CmVjaG8gJzwvZGl2Pic7CmVjaG8gJzxkaXYgaWQ9ImNvbnRlbnQiPgo8ZGl2IGlkPSJtYWluLWNvbnRlbnQiPic7CmVjaG8gJzxkaXYgaWQ9InNob3dfYmFyIj48YSBocmVmPSJ1c2VyLnBocCI+Jy4kTEFOR1sncHJvZmlsZSddLic8L2E+IHwgPGEgaHJlZj0idXNlci5waHA/aXdiPWVkaXQiPicuJExBTkdbJ2VkaXQnXS4nPC9hPiB8IDxhIGhyZWY9InVzZXIucGhwP2l3Yj11cGxvYWQiPicuJExBTkdbJ3VwbG9hZF9waG90byddLic8L2E+IHwgJy4kTEFOR1snY2hhbmdlX3Bhc3N3b3JkJ10uJzwvZGl2Pic7CmVjaG8gJzxmb3JtIG1ldGhvZD0icG9zdCIgYWN0aW9uPSJ1c2VyLnBocD9pd2I9cGFzc3dvcmQiPjxoND4nLiRMQU5HWydvbGRfcGFzc3dvcmQnXS4nPC9oND4KPGlucHV0IGNsYXNzPSJpd2ItcGFzc3dvcmQiIG5hbWU9Im9sZF9wYXNzIiB0eXBlPSJwYXNzd29yZCIgc2l6ZT0iMzAiLz48aDQ+Jy4kTEFOR1snbmV3X3Bhc3N3b3JkJ10uJzwvaDQ+CjxpbnB1dCBjbGFzcz0iaXdiLXBhc3N3b3JkIiBuYW1lPSJuZXdfcGFzcyIgdHlwZT0icGFzc3dvcmQiIHNpemU9IjMwIi8+CjxoND4nLiRMQU5HWydyZV9uZXdfcGFzc3dvcmQnXS4nPC9oND4KPGlucHV0IGNsYXNzPSJpd2ItcGFzc3dvcmQiIG5hbWU9InJlX25ld19wYXNzIiB0eXBlPSJwYXNzd29yZCIgc2l6ZT0iMzAiLz48YnIvPiAgICA8aW5wdXQgY2xhc3M9Iml3Yi1idXR0b24iIG5hbWU9ImNoYW5nZSIgdHlwZT0ic3VibWl0IiB2YWx1ZT0iJy4kTEFOR1snY2hhbmdlJ10uJyIvPjwvZm9ybT4nOwplY2hvICc8L2Rpdj48L2Rpdj4nOwpyZXF1aXJlX29uY2UoJ2luYy9mb290LnBocCcpOwoKYnJlYWs7CgpjYXNlICd1cGxvYWQnOgppZiAoISR1c2VyX2lkKQpyZWxvZ2luKCk7CiRtYXhzaXplPScyMDAnOwokZmFpbD0kX0ZJTEVTWydmaWxlJ11bJ3RtcF9uYW1lJ107CiRmYWlsbmFtZT0kX0ZJTEVTWydmaWxlJ11bJ25hbWUnXTsKaWYgKGlzc2V0KCRfUE9TVFsndXBsb2FkJ10pICYmICR1c2VyX2lkKQp7CiR0eXBlcyA9IGFycmF5KCJpbWFnZS9qcGciLCJpbWFnZS9wbmciLCJpbWFnZS9naWYiLCJpbWFnZS9qcGVnIik7CmlmICghaW5fYXJyYXkobWltZV9jb250ZW50X3R5cGUoJGZhaWwpLCAkdHlwZXMpKQokaHNsPSc8b2wgaWQ9ImVycm9yIj48bGk+Jy4kTEFOR1snaW5jb3JyZWN0X2ZpbGVfdHlwZSddLic8L2xpPjwvb2w+JzsKaWYgKCRfRklMRVNbJ2ZpbGUnXVsnc2l6ZSddID4gKDEwMjQqJG1heHNpemUpKQokaHNsPSc8b2wgaWQ9ImVycm9yIj48bGk+Jy4kTEFOR1sncGhvdG9fbWF4XzIwMGtiJ10uJzwvbGk+PC9vbD4nOwppZiAoZW1wdHkoJGZhaWxuYW1lKSkKJGhzbD0nPG9sIGlkPSJlcnJvciI+PGxpPicuJExBTkdbJ2ZhaWxlZCddLic8L2xpPjwvb2w+JzsKaWYgKCRfRklMRVNbJ2ZpbGUnXVsnc2l6ZSddID09IDApCiRoc2w9JzxvbCBpZD0iZXJyb3IiPjxsaT4nLiRMQU5HWydmYWlsZWQnXS4nPC9saT48L29sPic7CmlmIChlbXB0eSgkaHNsKSkKewppZiAobW92ZV91cGxvYWRlZF9maWxlKCRmYWlsLCAiaW1hZ2VzL3Byb2ZpbGUvJHVzZXJfaWQuanBnIikpCiRoc2w9JzxvbCBpZD0ic3VjY2VzcyI+PGxpPicuJExBTkdbJ3Bob3RvX3N1Y2Nlc3NmdWxseV91cGxvYWQnXS4nPC9saT48bGk+PGltZyBzcmM9ImltZy5waHA/aW1nPScuJHVzZXJfaWQuJy5qcGcmYW1wO3c9NjQmYW1wO2g9NjQiIGFsdD0iJy5odG1sc3BlY2lhbGNoYXJzKCR1c2VyX25hbWUpLiciIC8+PC9saT48L29sPic7CmVsc2UKJGhzbD0nPG9sIGlkPSJlcnJvciI+PGxpPicuJExBTkdbJ2ZhaWxlZCddLic8L2xpPjwvb2w+JzsKfQp9CiRoZWFkX3RpdGxlPSRMQU5HWyd1cGxvYWRfcGhvdG8nXTsKcmVxdWlyZV9vbmNlKCdpbmMvaGVhZC5waHAnKTsKZWNobyAnPGRpdiBpZD0ibWVzc2FnZSI+JzsKaWYgKCFlbXB0eSgkaHNsKSkKZWNobyAkaHNsOwplY2hvICc8L2Rpdj4KPGRpdiBpZD0iY29udGVudCI+CjxkaXYgaWQ9Im1haW4tY29udGVudCI+JzsKZWNobyAnPGRpdiBpZD0ic2hvd19iYXIiPjxhIGhyZWY9InVzZXIucGhwIj4nLiRMQU5HWydwcm9maWxlJ10uJzwvYT4gfCA8YSBocmVmPSJ1c2VyLnBocD9pd2I9ZWRpdCI+Jy4kTEFOR1snZWRpdCddLic8L2E+IHwgJy4kTEFOR1sndXBsb2FkX3Bob3RvJ10uJyB8IDxhIGhyZWY9InVzZXIucGhwP2l3Yj1wYXNzd29yZCI+Jy4kTEFOR1snY2hhbmdlX3Bhc3N3b3JkJ10uJzwvYT48L2Rpdj4nOwplY2hvICc8Zm9ybSBhY3Rpb249InVzZXIucGhwP2l3Yj11cGxvYWQiIG1ldGhvZD0icG9zdCIgZW5jdHlwZT0ibXVsdGlwYXJ0L2Zvcm0tZGF0YSI+CiAgICA8aW5wdXQgbmFtZT0iTUFYX0ZJTEVfU0laRSIgdmFsdWU9IjIwMDAwMCIgdHlwZT0iaGlkZGVuIi8+CiAgICA8aDQ+Jy4kTEFOR1snc2VsZWN0X2ZpbGUnXS4nPC9oND48aW5wdXQgdHlwZT0iZmlsZSIgbmFtZT0iZmlsZSIvPgogICAgPGlucHV0IGNsYXNzPSJpd2ItYnV0dG9uIiBuYW1lPSJ1cGxvYWQiIHR5cGU9InN1Ym1pdCIgdmFsdWU9IicuJExBTkdbJ3VwbG9hZCddLiciLz48L2Zvcm0+PC9kaXY+PC9kaXY+JzsKcmVxdWlyZV9vbmNlKCdpbmMvZm9vdC5waHAnKTsKCgpicmVhazsKCgpkZWZhdWx0OgppZiAoISR1c2VyX2lkKQpyZWxvZ2luKCk7CiRpZD1hYnMoKGludCkkX0dFVFsnaWQnXSk7CmlmIChlbXB0eSgkaWQpKQokaWQ9JHVzZXJfaWQ7CiRyZXE9bXlzcWxfcXVlcnkoInNlbGVjdCAqIGZyb20gdXNlciB3aGVyZSBpZD0nIi5teXNxbF9yZWFsX2VzY2FwZV9zdHJpbmcoJGlkKS4iJyIpOwppZiAobXlzcWxfbnVtX3Jvd3MoJHJlcSkgPT0gMCkKewpyZXF1aXJlX29uY2UoJ2luYy9oZWFkLnBocCcpOwplY2hvICc8ZGl2IGlkPSJtZXNzYWdlIj48b2wgaWQ9ImVycm9yIj48bGk+UGVuZ2d1bmEgZGVuZ2FuIGlkICcuaHRtbGVudGl0aWVzKCRpZCkuJyB0aWRhayBhZGE8L2xpPjwvb2w+PC9kaXY+JzsKcmVxdWlyZV9vbmNlKCdpbmMvZm9vdC5waHAnKTsKZXhpdDsKfQokVVNFUj1teXNxbF9mZXRjaF9hcnJheSgkcmVxKTsKJGhlYWRfdGl0bGU9aHRtbHNwZWNpYWxjaGFycygkVVNFUlsnbmFtZSddKTsKcmVxdWlyZV9vbmNlKCdpbmMvaGVhZC5waHAnKTsKZWNobyAnPGRpdiBpZD0ibWVzc2FnZSI+PC9kaXY+PGRpdiBpZD0iY29udGVudCI+CjxkaXYgaWQ9Im1haW4tY29udGVudCI+JzsKaWYgKCRVU0VSWydpZCddID09ICR1c2VyX2lkKQplY2hvICc8ZGl2IGlkPSJzaG93X2JhciI+Jy4kTEFOR1sncHJvZmlsZSddLicgfCA8YSBocmVmPSJ1c2VyLnBocD9pd2I9ZWRpdCI+Jy4kTEFOR1snZWRpdCddLic8L2E+IHwgPGEgaHJlZj0idXNlci5waHA/aXdiPXVwbG9hZCI+Jy4kTEFOR1sndXBsb2FkX3Bob3RvJ10uJzwvYT4gfCA8YSBocmVmPSJ1c2VyLnBocD9pd2I9cGFzc3dvcmQiPicuJExBTkdbJ2NoYW5nZV9wYXNzd29yZCddLic8L2E+PC9kaXY+JzsKaWYgKCRpc19hZG1pbiAmJiAkVVNFUlsnaWQnXSAhPSAkdXNlcl9pZCAmJiAkVVNFUlsnYWRtaW4nXSA8IDEpCnsKZWNobyAnPGRpdiBpZD0ic2hvd19iYXIiPic7CmlmICgkVVNFUlsnYXV0aG9yJ10gPiAwKQplY2hvICc8YSBocmVmPSJvd25lci5waHA/aXdiPWF1dGhvciZhbXA7YWN0aW9uPWRlbGV0ZSZhbXA7aWQ9Jy4kVVNFUlsnaWQnXS4nIj4nLiRMQU5HWydkZWxldGVfYXV0aG9yJ10uJzwvYT4nOwplbHNlCmVjaG8gJzxhIGhyZWY9Im93bmVyLnBocD9pd2I9YXV0aG9yJmFtcDthY3Rpb249YWRkJmFtcDtpZD0nLiRVU0VSWydpZCddLiciPicuJExBTkdbJ2FzX2F1dGhvciddLic8L2E+JzsKZWNobyAnIHwgJzsKaWYgKCRVU0VSWydiYW4nXSA9PSAwKQplY2hvICc8YSBocmVmPSJvd25lci5waHA/aXdiPWJhbm5lZCZhbXA7aWQ9Jy4kVVNFUlsnaWQnXS4nIj4nLiRMQU5HWydiYW4nXS4nPC9hPic7CmVsc2UKZWNobyAnPGEgaHJlZj0ib3duZXIucGhwP2l3Yj11bmJhbm5lZCZhbXA7aWQ9Jy4kVVNFUlsnaWQnXS4nIj4nLiRMQU5HWyd1bmJhbiddLic8L2E+JzsKZWNobyAnIHwgJzsKZWNobyAnPGEgaHJlZj0ib3duZXIucGhwP2l3Yj1kZWxldGVfdXNlciZhbXA7aWQ9Jy4kVVNFUlsnaWQnXS4nIj4nLiRMQU5HWydkZWxldGVfdXNlciddLic8L2E+JzsKZWNobyAnPC9kaXY+JzsKfQplY2hvICc8dGFibGU+CiAgICA8dHI+Cjx0ZCBzdHlsZT0id2lkdGg6IDUwJTsiPic7CiRmb3RvX3Byb2ZpbGU9J2ltYWdlcy9wcm9maWxlLycuJFVTRVJbJ2lkJ10uJy5qcGcnOwppZiAoZmlsZV9leGlzdHMoJGZvdG9fcHJvZmlsZSkpCmVjaG8gJzxhIGhyZWY9IicuJGZvdG9fcHJvZmlsZS4nIj48aW1nIHNyYz0iJy4kZm90b19wcm9maWxlLiciIHdpZHRoPSI4MCIgaGVpZ2h0PSIxMDAiIGFsdD0iIiBzdHlsZT0id2lkdGg6IDEwMCUiLz48L2E+JzsKZWxzZQplY2hvICc8aW1nIHNyYz0iaW1hZ2VzL3Byb2ZpbGUvZGVmYXVsdC5qcGciIHdpZHRoPSI4MCIgaGVpZ2h0PSIxMDAiIGFsdD0iIiBzdHlsZT0id2lkdGg6IDEwMCUiLz4nOwplY2hvICc8L3RkPic7CgppZiAoKCRVU0VSWydhdXRob3InXSA9PSAnMScpICYmICgkVVNFUlsnYWRtaW4nXSA9PSAnMCcpKQp7CiRmb250PSJncmVlbiI7Cn0KCmVsc2VpZiAoKCRVU0VSWydhdXRob3InXSA9PSAnMicpICYmICgkVVNFUlsnYWRtaW4nXSA9PSAnMCcpKQp7CiRmb250PSJyZWQiOwp9CmVsc2VpZiAoKCRVU0VSWydhdXRob3InXSA9PSAnMycpICYmICgkVVNFUlsnYWRtaW4nXSA9PSAnMCcpKQp7CiRmb250PSJibHVlIjsKfQplbHNlaWYgKCgkVVNFUlsnYXV0aG9yJ10gPT0gJzQnKSAmJiAoJFVTRVJbJ2FkbWluJ10gPT0gJzAnKSkKewokZm9udD0ieWVsbG93IjsKfQplbHNlaWYgKCRVU0VSWydhZG1pbiddID09ICcxJykKewokZm9udD0iIzczMTE3NCI7Cn0KZWxzZQp7CiRmb250PSJibGFjayI7Cn0KZWNobyAnPHRkPjxzdHJvbmc+PGZvbnQgY29sb3I9IicuJGZvbnQuJyI+Jy5odG1sc3BlY2lhbGNoYXJzKCRVU0VSWyduYW1lJ10pLic8L2ZvbnQ+PC9zdHJvbmc+PC90ZD4nOwplY2hvICc8L3RyPjwvdGFibGU+JzsKaWYgKCRVU0VSWydpZCddICE9ICR1c2VyX2lkKQplY2hvICc8Zm9ybSBtZXRob2Q9ImdldCIgYWN0aW9uPSJtZXNzYWdlLnBocCI+PGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iaXdiIiB2YWx1ZT0id3JpdGUiLz48aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJ0byIgdmFsdWU9IicuJFVTRVJbJ2lkJ10uJyIvPgo8aW5wdXQgY2xhc3M9Iml3Yi1idXR0b24iIHR5cGU9InN1Ym1pdCIgdmFsdWU9IicuJExBTkdbJ3NlbmRfbWVzc2FnZSddLiciLz48L2Zvcm0+JzsKJHZpZXc9aXNzZXQoJF9HRVRbJ3ZpZXcnXSkgPyB0cmltKCRfR0VUWyd2aWV3J10pIDogJyc7CnN3aXRjaCAoJHZpZXcpCnsKY2FzZSAnaW5mbyc6CmVjaG8gJzxkaXYgaWQ9InNob3dfYmFyIj48YSBocmVmPSJ1c2VyLnBocD9pZD0nLiRVU0VSWydpZCddLicmYW1wO3ZpZXc9cG9zdCI+Jy4kTEFOR1sncG9zdCddLic8L2E+IHwgJy4kTEFOR1snaW5mbyddLic8L2Rpdj4nOwplY2hvICc8aDQ+Jy4kTEFOR1snaW5mbyddLic8L2g0Pgo8b2w+JzsKaWYgKCRpc19hZG1pbiB8fCAkVVNFUlsnaWQnXSA9PSAkdXNlcl9pZCkKewogZWNobyAnPGxpPklEOiAnLmh0bWxzcGVjaWFsY2hhcnMoJFVTRVJbJ2lkJ10pLic8L2xpPjxsaT4nLiRMQU5HWyd1c2VybmFtZSddLic6ICcuaHRtbHNwZWNpYWxjaGFycygkVVNFUlsndXNlcm5hbWUnXSkuJzwvbGk+PGxpPicuJExBTkdbJ2NyZWRpdCddLic6IDxhIGhyZWY9ImFkbWluLnBocD9pd2I9Y3JlZGl0Ij5ScCAnLnN0cnJldih3b3Jkd3JhcChzdHJyZXYoJFVTRVJbJ2NyZWRpdCddKSwzLCIuIix0cnVlKSkuJzwvYT48L2xpPjxsaT4nLiRMQU5HWydlbWFpbCddLic6ICcuaHRtbHNwZWNpYWxjaGFycygkVVNFUlsnZW1haWwnXSkuJzwvbGk+JzsKaWYgKHByZWdfbWF0Y2goIiM8I3NpIiwkVVNFUlsnbm9faHAnXSkpCiRteUhQID0gIiI7CmVsc2UKJG15SFAgPSBzdHJfcmVwbGFjZSgiWyIsIiIsc3RyX3JlcGxhY2UoIl0iLCIiLCRVU0VSWydub19ocCddKSk7CmVjaG8gJzxsaT4nLiRMQU5HWydwaG9uZV9udW1iZXInXS4nOiAnLmh0bWxzcGVjaWFsY2hhcnMoJG15SFApLic8L2xpPic7Cn0KZWNobyAnPGxpPicuJExBTkdbJ25hbWUnXS4nOiAnLmh0bWxzcGVjaWFsY2hhcnMoJFVTRVJbJ25hbWUnXSkuJzwvbGk+CiAgICA8bGk+Jy4kTEFOR1snZ2VuZGVyJ10uJzogJzsKaWYgKCRVU0VSWydnZW5kZXInXSA9PSAnZmVtYWxlJykKZWNobyAkTEFOR1snZmVtYWxlJ107CmVsc2UKZWNobyAkTEFOR1snbWFsZSddOwplY2hvICc8L2xpPgo8bGk+Jy4kTEFOR1snYmlydGhkYXknXS4nOiAnLmh0bWxzcGVjaWFsY2hhcnMoJFVTRVJbJ2JpcnRoZGF5J10pLic8L2xpPgo8bGk+Jy4kTEFOR1snYWRkcmVzcyddLic6ICcuaHRtbHNwZWNpYWxjaGFycygkVVNFUlsnYWRkcmVzcyddKS4nPC9saT4KPGxpPicuJExBTkdbJ3NpdGUnXS4nOiA8YSBocmVmPSInLmh0bWxlbnRpdGllcygkVVNFUlsnc2l0ZSddKS4nIj4nLmh0bWxlbnRpdGllcygkVVNFUlsnc2l0ZSddKS4nPC9hPjwvbGk+PGxpPicuJExBTkdbJ2RhdGVfcmVnaXN0ZXInXS4nOiAnLndha3R1KCRVU0VSWydkYXRlX3JlZyddKS4nPC9saT48bGk+Jy4kTEFOR1snbGFzdF9sb2dpbiddLic6ICcudGltZV9hZ28oJFVTRVJbJ2xhc3RkYXRlJ10pLic8L2xpPjxsaT4nLiRMQU5HWydhYm91dCddLic6ICcuaHRtbHNwZWNpYWxjaGFycygkVVNFUlsnYWJvdXQnXSkuJzwvbGk+JzsKJGZvbGxvd2luZz1teXNxbF9yZXN1bHQobXlzcWxfcXVlcnkoIlNFTEVDVCBDT1VOVCgqKSBBUyBOVU0gRlJPTSBgZm9sbG93aW5nYCBXSEVSRSBgc2l0ZV9pZGA9JyIuJFVTRVJbJ2lkJ10uIicgQU5EIGB1cmxgIT0nIi4kVVNFUlsnc2l0ZSddLiInIiksIDApOwplY2hvICc8bGk+Jy4kTEFOR1snZm9sbG93aW5nJ10uJzogJy4kZm9sbG93aW5nLic8L2xpPic7CiRmb2xsb3dlcj1teXNxbF9yZXN1bHQobXlzcWxfcXVlcnkoIlNFTEVDVCBDT1VOVCgqKSBBUyBOVU0gRlJPTSBgZm9sbG93aW5nYCBXSEVSRSBgc2l0ZV9pZGAhPSciLiRVU0VSWydpZCddLiInIEFORCBgdXJsYD0nIi4kVVNFUlsnc2l0ZSddLiInIiksIDApOwplY2hvICc8bGk+Jy4kTEFOR1snZm9sbG93ZXInXS4nOiA8YSBocmVmPSJmb2xsb3dlci5waHA/aWQ9Jy4kVVNFUlsnaWQnXS4nIj4nLiRmb2xsb3dlci4nPC9hPjwvbGk+JzsKZWNobyAnPC9vbD4nOwpicmVhazsKY2FzZSAncG9zdCc6CmRlZmF1bHQ6CmVjaG8gJzxkaXYgaWQ9InNob3dfYmFyIj4nLiRMQU5HWydwb3N0J10uJyB8IDxhIGhyZWY9InVzZXIucGhwP2lkPScuJFVTRVJbJ2lkJ10uJyZhbXA7dmlldz1pbmZvIj4nLiRMQU5HWydpbmZvJ10uJzwvYT48L2Rpdj4nOwokdG90bD1teXNxbF9yZXN1bHQobXlzcWxfcXVlcnkoInNlbGVjdCBjb3VudCgqKSBhcyBudW0gZnJvbSBibG9nIHdoZXJlIHNpdGVfaWQ9JyIuJFVTRVJbJ2lkJ10uIicgYW5kIGRyYWZ0PScwJyIpLCAwKTsKJFJlcz1teXNxbF9xdWVyeSgic2VsZWN0ICogZnJvbSBibG9nIHdoZXJlIHNpdGVfaWQ9JyIuJFVTRVJbJ2lkJ10uIicgYW5kIGRyYWZ0PScwJyBvcmRlciBieSB0aW1lIGRlc2MgbGltaXQgMTA7Iik7CmlmICgkdG90bCAhPSAwKQp7CndoaWxlICgkcmVzPW15c3FsX2ZldGNoX2FycmF5KCRSZXMpKQp7CmVjaG8gJGkgJSAyID8gJzxkaXYgY2xhc3M9InJvdzAiPicgOiAnPGRpdiBjbGFzcz0icm93MSI+JzsKZWNobyAnPGEgaHJlZj0iJy4kVVNFUlsnc2l0ZSddLicvJy4kcmVzWydsaW5rJ10uJy54aHRtbCI+Jy5odG1sc3BlY2lhbGNoYXJzKCRyZXNbJ3RpdGxlJ10pLic8L2E+PGJyLz4nLnRpbWVfYWdvKCRyZXNbJ3RpbWUnXSkuJzxici8+JzsKJHRvdGFsPW15c3FsX3Jlc3VsdChteXNxbF9xdWVyeSgic2VsZWN0IGNvdW50KCopIGFzIG51bSBmcm9tIGNvbW1lbnQgd2hlcmUgYmxvZ19pZD0nIi4kcmVzWydpZCddLiInIEFORCBzdGF0dXM9JzEnIiksIDApOwplY2hvICcnLiRMQU5HWydjb21tZW50cyddLic6IDxhIGhyZWY9IicuJFVTRVJbJ3NpdGUnXS4nLycuJHJlc1snbGluayddLicueGh0bWwjY29tbWVudHMiPicuJHRvdGFsLic8L2E+JzsKaWYgKCRpc19hZG1pbikKZWNobyAnIFs8YSBocmVmPSJvd25lci5waHA/aXdiPXBvc3QmYW1wO2FjdGlvbj1kZWxldGUmYW1wO2lkPScuJHJlc1snaWQnXS4nIj4nLiRMQU5HWydkZWxldGUnXS4nPC9hPl0nOworKyRpOwplY2hvICc8L2Rpdj4nOwp9Cn0KZWxzZQp7CmlmICgkVVNFUlsnaWQnXSA9PSAkdXNlcl9pZCkKZWNobyAnPHA+Jy4kTEFOR1snZW1wdHknXS4nPC9wPic7CmVsc2UKZWNobyAnPHA+Jy4kTEFOR1snZW1wdHknXS4nPC9wPic7Cn0KZWNobyAnPC9vbD4nOwpicmVhazsKfQplY2hvICc8L2Rpdj48L2Rpdj4nOwpyZXF1aXJlX29uY2UoJ2luYy9mb290LnBocCcpOwpicmVhazsKfQo="));
?>