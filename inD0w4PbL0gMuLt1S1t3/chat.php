<?php
/*
*Nama Script: IndoWapBlog Multi Site
*Pembuat: Achunk JealousMan
*Email: achunk17[at]gmail[dot]com
*Situs: http://indowapblog.com
*Facebook: http://www.facebook.com/achunks
*/

eval(base64_decode("CgovKgoqTmFtYSBTY3JpcHQ6IEluZG9XYXBCbG9nIE11bHRpIFNpdGUKKlZlcnNpOiAoTGloYXQgVkVSU0lPTi50eHQpCipQZW1idWF0OiBBY2h1bmsgSmVhbG91c01hbgoqRW1haWw6IGFjaHVuazE3W2F0XWdtYWlsW2RvdF1jb20KKlNpdHVzOiBodHRwOi8vaW5kb3dhcGJsb2cuY29tCipGYWNlYm9vazogaHR0cDovL3d3dy5mYWNlYm9vay5jb20vYWNodW5rcwoqLwoKZGVmaW5lKCdfSVdCXycsIDEpOwoKcmVxdWlyZV9vbmNlKCdpbmMvaW5kb3dhcGJsb2cucGhwJyk7CiRsaXZlX2NoYXQ9J29mZic7CiRpd2I9aXNzZXQoJF9HRVRbJ2l3YiddKSA/IHRyaW0oJF9HRVRbJ2l3YiddKSA6ICcnOwpzd2l0Y2ggKCRpd2IpCnsKY2FzZSAncmVhZCc6CmlmICghJHVzZXJfaWQpCnJlbG9naW4oKTsKJGNpZD1hbmdrYSgkX0dFVFsnY2lkJ10pOwokcT1teXNxbF9xdWVyeSgic2VsZWN0ICogZnJvbSBjaGF0IHdoZXJlIGlkPSciLm15c3FsX3JlYWxfZXNjYXBlX3N0cmluZygkY2lkKS4iJyIpOwppZiAobXlzcWxfbnVtX3Jvd3MoJHEpID09IDApCnsKcmVxdWlyZV9vbmNlKCdpbmMvaGVhZC5waHAnKTsKcGFnZV9ub3RfZm91bmQoKTsKcmVxdWlyZV9vbmNlKCdpbmMvZm9vdC5waHAnKTsKZXhpdDsKfQplbHNlCnsKJHI9bXlzcWxfZmV0Y2hfYXJyYXkoJHEpOwppZiAoaXNzZXQoJF9HRVRbJ2RlbGNvbSddKSkKewokZGVsPWh0bWxlbnRpdGllcygkX0dFVFsnZGVsY29tJ10pOwppZiAoJGlzX2FkbWluKQp7CiRtZT1teXNxbF9xdWVyeSgic2VsZWN0ICogZnJvbSBjaGF0X2NvbW1lbnQgd2hlcmUgaWQ9JyIubXlzcWxfcmVhbF9lc2NhcGVfc3RyaW5nKCRkZWwpLiInIik7Cn0KZWxzZWlmICgkclsndXNlcl9pZCddID09ICR1c2VyX2lkKQp7CiRtZT1teXNxbF9xdWVyeSgic2VsZWN0ICogZnJvbSBjaGF0X2NvbW1lbnQgd2hlcmUgaWQ9JyIubXlzcWxfcmVhbF9lc2NhcGVfc3RyaW5nKCRkZWwpLiInIGFuZCBjaGF0X2lkPSciLiRyWydpZCddLiInIik7Cn0KZWxzZQp7CiRtZT1teXNxbF9xdWVyeSgic2VsZWN0ICogZnJvbSBjaGF0X2NvbW1lbnQgd2hlcmUgaWQ9JyIubXlzcWxfcmVhbF9lc2NhcGVfc3RyaW5nKCRkZWwpLiInIGFuZCBjaGF0X2lkPSciLiRyWydpZCddLiInIGFuZCB1c2VyX2lkPSciLiR1c2VyX2lkLiInIik7Cn0KaWYgKG15c3FsX251bV9yb3dzKCRtZSkgIT0gMCkKbXlzcWxfcXVlcnkoImRlbGV0ZSBmcm9tIGNoYXRfY29tbWVudCB3aGVyZSBpZD0nIi5teXNxbF9yZWFsX2VzY2FwZV9zdHJpbmcoJGRlbCkuIiciKTsKfQplbHNlaWYgKGlzc2V0KCRfR0VUWyd1bmxpa2UnXSkpCnsKJG1lPW15c3FsX3F1ZXJ5KCJzZWxlY3QgaWQgZnJvbSBjaGF0X2xpa2Ugd2hlcmUgY2hhdF9pZD0nIi4kclsnaWQnXS4iJyBhbmQgdXNlcl9pZD0nIi4kdXNlcl9pZC4iJyIpOwppZiAobXlzcWxfbnVtX3Jvd3MoJG1lKSAhPSAwKQpteXNxbF9xdWVyeSgiZGVsZXRlIGZyb20gY2hhdF9saWtlIHdoZXJlIGNoYXRfaWQ9JyIuJHJbJ2lkJ10uIicgYW5kIHVzZXJfaWQ9JyIuJHVzZXJfaWQuIiciKTsKfQplbHNlaWYgKGlzc2V0KCRfR0VUWydsaWtlJ10pKQp7CiRtZT1teXNxbF9xdWVyeSgic2VsZWN0IGlkIGZyb20gY2hhdF9saWtlIHdoZXJlIGNoYXRfaWQ9JyIuJHJbJ2lkJ10uIicgYW5kIHVzZXJfaWQ9JyIuJHVzZXJfaWQuIiciKTsKaWYgKG15c3FsX251bV9yb3dzKCRtZSkgPT0gMCkKbXlzcWxfcXVlcnkoImluc2VydCBpbnRvIGNoYXRfbGlrZSBzZXQgY2hhdF9pZD0nIi4kclsnaWQnXS4iJywgdXNlcl9pZD0nIi4kdXNlcl9pZC4iJywgdGltZT0nIi50aW1lKCkuIiciKTsKfQplbHNlaWYgKGlzc2V0KCRfUE9TVFsnY29tbWVudF9jaGF0J10pKQp7CiR0ZXh0PSRfUE9TVFsnY29tbWVudCddOwokX2Zsb29kID0gKCRpc19hZG1pbikgPyAzMCA6IDgwOwokZmxvb2RpbmcgPSB0aW1lKCkgLSAkX2Zsb29kOwokaXNmbG9vZD1teXNxbF9xdWVyeSgic2VsZWN0IGlkIGZyb20gY2hhdF9jb21tZW50IHdoZXJlIHVzZXJfaWQ9JyIuJHVzZXJfaWQuIicgYW5kIHRpbWUgPiAkZmxvb2RpbmciKTsKaWYgKG15c3FsX251bV9yb3dzKCRpc2Zsb29kKSAhPSAwKQp7CiRlcmM9JExBTkdbJ2Zsb29kaW5nJ107Cn0KZWxzZWlmIChtYl9zdHJsZW4oJHRleHQpID4gNTAwKQp7CiRlcmM9c3RyX3JlcGxhY2UoJzo6bnVtYmVyOjonLCc1MDAnLCRMQU5HWyd0ZXh0X21heCddKTsKfQplbHNlaWYgKGVtcHR5KCR0ZXh0KSkKewokZXJjPSRMQU5HWydlbXB0eV90ZXh0J107Cn0KZWxzZQp7Cm15c3FsX3F1ZXJ5KCJpbnNlcnQgaW50byBjaGF0X2NvbW1lbnQgc2V0IGNoYXRfaWQ9JyIuJHJbJ2lkJ10uIicsIHVzZXJfaWQ9JyIuJHVzZXJfaWQuIicsIHRleHQ9JyIubXlzcWxfcmVhbF9lc2NhcGVfc3RyaW5nKCR0ZXh0KS4iJywgdGltZT0nIi50aW1lKCkuIiciKTsKaWYgKCRyWyd1c2VyX2lkJ10gIT0gJHVzZXJfaWQpCnsKJHRtID0gdGltZSgpOwokdG9rZW4gPSAkdG0gLSAkclsndXNlcl9pZCddOwokbXNnPXN0cl9yZXBsYWNlKCc6Om5hbWU6OicsaHRtbHNwZWNpYWxjaGFycygkdXNlcl9uYW1lKSxzdHJfcmVwbGFjZSgnOjpjaGF0OjonLCc8YSBocmVmPSInLiRzaXRlWyd1cmwnXS4nL2NoYXQucGhwP2l3Yj1yZWFkJmFtcDtjaWQ9Jy4kclsnaWQnXS4nJmFtcDt2aWV3X2NvbW1lbnQiPmNoYXQ8L2E+JywkTEFOR1snY2hhdF9ub3RpZmljYXRpb24nXSkpOwpteXNxbF9xdWVyeSgiaW5zZXJ0IGludG8gYHBtYCBzZXQgYHJlY2VpdmVyX2lkYD0nIi5teXNxbF9yZWFsX2VzY2FwZV9zdHJpbmcoJHJbJ3VzZXJfaWQnXSkuIicsIGBzZW5kZXJfaWRgPScyJywgYG5hbWVgPSdOT1RJRklLQVNJJywgYHRleHRgPSciLm15c3FsX3JlYWxfZXNjYXBlX3N0cmluZygkbXNnKS4iJywgYHJlYWRgPScyJywgYHRpbWVgPSciLiR0bS4iJyIpIG9yIGRpZShteXNxbF9lcnJvcigpKTsKfQplbHNlCnt9CiRraXJpbT1teXNxbF9xdWVyeSgic2VsZWN0IGB1c2VyX2lkYCBmcm9tIGBjaGF0X2NvbW1lbnRgIHdoZXJlIGBjaGF0X2lkYD0nIi4kclsnaWQnXS4iJyBhbmQgYHVzZXJfaWRgIT0nIi4kdXNlcl9pZC4iJyBhbmQgYHVzZXJfaWRgIT0nIi4kclsndXNlcl9pZCddLiInIG9yZGVyIGJ5IGB1c2VyX2lkYCBkZXNjIik7CmlmIChteXNxbF9udW1fcm93cygka2lyaW0pICE9IDApCnsKJHRtID0gdGltZSgpOwp3aGlsZSAoJGtpcmlta2U9bXlzcWxfZmV0Y2hfYXJyYXkoJGtpcmltKSkKewppZiAoJGtpcmlta2VbJ3VzZXJfaWQnXSAhPSAkdWlkKQp7CiR0b2tlbiA9ICR0bSAtICRraXJpbWtlWyd1c2VyX2lkJ107CiRtc2c9c3RyX3JlcGxhY2UoJzo6bmFtZTo6JyxodG1sc3BlY2lhbGNoYXJzKCR1c2VyX25hbWUpLHN0cl9yZXBsYWNlKCc6OmNoYXQ6OicsJzxhIGhyZWY9IicuJHNpdGVbJ3VybCddLicvY2hhdC5waHA/aXdiPXJlYWQmYW1wO2NpZD0nLiRyWydpZCddLicmYW1wO3ZpZXdfY29tbWVudCI+Y2hhdDwvYT4nLHN0cl9yZXBsYWNlKCc6Om5hbWUyOjonLGl3YmlkKCRyWyd1c2VyX2lkJ10pLCRMQU5HWydjaGF0X25vdGlmaWNhdGlvbjInXSkpKTsKbXlzcWxfcXVlcnkoImluc2VydCBpbnRvIGBwbWAgc2V0IGByZWNlaXZlcl9pZGA9JyIubXlzcWxfcmVhbF9lc2NhcGVfc3RyaW5nKCRraXJpbWtlWyd1c2VyX2lkJ10pLiInLCBgc2VuZGVyX2lkYD0nMicsIGBuYW1lYD0nTk9USUZJS0FTSScsIGB0ZXh0YD0nIi5teXNxbF9yZWFsX2VzY2FwZV9zdHJpbmcoJG1zZykuIicsIGByZWFkYD0nMicsIGB0aW1lYD0nIi4kdG0uIiciKSBvciBkaWUobXlzcWxfZXJyb3IoKSk7Cn0KZWxzZQp7CiR1aWQgLj0gJGtpcmlta2VbJ3VzZXJfaWQnXTsKfQp9Cn0KZWxzZQp7fQp9Cn0KZWxzZQp7fQppZiAoaXNzZXQoJF9HRVRbJ3ZpZXdfbGlrZSddKSkKJGhlYWRfdGl0bGU9JExBTkdbJ2xpa2VzJ107CmVsc2UKJGhlYWRfdGl0bGU9JExBTkdbJ2NvbW1lbnRzJ107CnJlcXVpcmVfb25jZSgnaW5jL2hlYWQucGhwJyk7CmVjaG8gJzxkaXYgaWQ9Im1lc3NhZ2UiPic7CmVjaG8gJzwvZGl2Pic7CmVjaG8gJzxkaXYgaWQ9ImNvbnRlbnQiPjxkaXYgaWQ9Im1haW4tY29udGVudCI+JzsKZWNobyAnPGRpdiBpZD0ic2hvd19iYXIiPjxhIGhyZWY9ImNoYXQucGhwPyI+Jy4kTEFOR1snY2hhdHJvb20nXS4nPC9hPiB8ICcuJGhlYWRfdGl0bGUuJzwvZGl2Pic7CmVjaG8gJzxkaXYgY2xhc3M9InJvdzEiPjxpbWcgc3JjPSInLiRzaXRlWyd1cmwnXS4nL2ltZy5waHA/aW1nPScuJHJbJ3VzZXJfaWQnXS4nLmpwZyZhbXA7dz00MCZhbXA7aD00MCIgYWx0PSIiLz4gPGEgaHJlZj0iJy4kc2l0ZVsndXJsJ10uJy91c2VyLnBocD9pZD0nLiRyWyd1c2VyX2lkJ10uJyI+JzsKJHVzcj1teXNxbF9mZXRjaF9hcnJheShteXNxbF9xdWVyeSgic2VsZWN0IG5hbWUsIGF1dGhvciwgYWRtaW4gZnJvbSB1c2VyIHdoZXJlIGlkPSciLiRyWyd1c2VyX2lkJ10uIiciKSk7CmlmICgoJHVzclsnYXV0aG9yJ10gPT0gJzEnKSAmJiAoJHVzclsnYWRtaW4nXSA9PSAnMCcpKQp7CmVjaG8gJzxmb250IGNvbG9yPSJncmVlbiI+Jy5odG1sc3BlY2lhbGNoYXJzKCR1c3JbJ25hbWUnXSkuJzwvZm9udD4nOwp9CgplbHNlaWYgKCgkdXNyWydhdXRob3InXSA9PSAnMicpICYmICgkdXNyWydhZG1pbiddID09ICcwJykpCnsKZWNobyAnPGZvbnQgY29sb3I9InJlZCI+Jy5odG1sc3BlY2lhbGNoYXJzKCR1c3JbJ25hbWUnXSkuJzwvZm9udD4nOwp9CgplbHNlaWYgKCgkdXNyWydhdXRob3InXSA9PSAnMycpICYmICgkdXNyWydhZG1pbiddID09ICcwJykpCnsKZWNobyAnPGZvbnQgY29sb3I9ImJsdWUiPicuaHRtbHNwZWNpYWxjaGFycygkdXNyWyduYW1lJ10pLic8L2ZvbnQ+JzsKfQoKZWxzZWlmICgoJHVzclsnYXV0aG9yJ10gPT0gJzQnKSAmJiAoJHVzclsnYWRtaW4nXSA9PSAnMCcpKQp7CmVjaG8gJzxmb250IGNvbG9yPSJvcmFuZ2UiPicuaHRtbHNwZWNpYWxjaGFycygkdXNyWyduYW1lJ10pLic8L2ZvbnQ+JzsKfQplbHNlaWYgKCR1c3JbJ2FkbWluJ10gPT0gJzEnKQp7CmVjaG8gJzxmb250IGNvbG9yPSIjNzMxMTc0Ij4nLmh0bWxzcGVjaWFsY2hhcnMoJHVzclsnbmFtZSddKS4nPC9mb250Pic7Cn0KZWxzZQp7CmVjaG8gJzxmb250IGNvbG9yPSJibGFjayI+Jy5odG1sc3BlY2lhbGNoYXJzKCR1c3JbJ25hbWUnXSkuJzwvZm9udD4nOwp9CmVjaG8gJzwvYT46ICcuYmJzbSgkclsndGV4dCddKS4nJzsKaWYgKCRyWyd1c2VyX2lkJ10gPT0gJHVzZXJfaWQgfHwgJGlzX2FkbWluKQplY2hvICcgPGEgaHJlZj0iY2hhdC5waHA/aXdiPWRlbGV0ZSZhbXA7cmVzPScuJHJbJ2lkJ10uJyI+Jy4kTEFOR1snZGVsZXRlJ10uJzwvYT4nOwplY2hvICc8YnIvPjxzcGFuIGNvbG9yPSIjNjY2NjY2Ij4nLnRpbWVfYWdvKCRyWyd0aW1lJ10pLic8L3NwYW4+JzsKJGxpa2U9bXlzcWxfcXVlcnkoInNlbGVjdCBpZCBmcm9tIGNoYXRfbGlrZSB3aGVyZSBjaGF0X2lkPSciLiRyWydpZCddLiInIik7CiR0b3RhbGxpa2U9bXlzcWxfbnVtX3Jvd3MoJGxpa2UpOwokY20gPSBteXNxbF9xdWVyeSgic2VsZWN0IGlkIGZyb20gY2hhdF9jb21tZW50IHdoZXJlIGNoYXRfaWQ9JyIuJHJbJ2lkJ10uIiciKTsKJHRvdGFsY29tPW15c3FsX251bV9yb3dzKCRjbSk7CiRpdHNtZT1teXNxbF9xdWVyeSgic2VsZWN0IGlkIGZyb20gY2hhdF9saWtlIHdoZXJlIGNoYXRfaWQ9JyIuJHJbJ2lkJ10uIicgYW5kIHVzZXJfaWQ9JyIuJHVzZXJfaWQuIiciKTsKZWNobyAnPGJyLz4nOwppZiAobXlzcWxfbnVtX3Jvd3MoJGl0c21lKSAhPSAwKQp7CiRsayA9ICR0b3RhbGxpa2UgLSAxOwplY2hvIHN0cl9yZXBsYWNlKCc6Om51bWJlcjo6JywkbGssc3RyX3JlcGxhY2UoJzo6dW5saWtlOjonLCc8YSBocmVmPSJjaGF0LnBocD9pd2I9cmVhZCZhbXA7Y2lkPScuJHJbJ2lkJ10uJyZhbXA7dW5saWtlPScuJHJbJ2lkJ10uJyI+Jy4kTEFOR1sndW5saWtlJ10uJzwvYT4nLCRMQU5HWydsaWtlbHknXSkpOwp9CmVsc2UKewplY2hvIHN0cl9yZXBsYWNlKCc6Om51bWJlcjo6JywkdG90YWxsaWtlLHN0cl9yZXBsYWNlKCc6Omxpa2VzOjonLCc8YSBocmVmPSJjaGF0LnBocD9pd2I9cmVhZCZhbXA7Y2lkPScuJHJbJ2lkJ10uJyZhbXA7bGlrZT0nLiRyWydpZCddLiciPicuJExBTkdbJ2xpa2VzJ10uJzwvYT4nLCRMQU5HWydsaWtlbHkyJ10pKTsKfQplY2hvICc8L2Rpdj4nOwplY2hvICc8aHI+PC9ocj48ZGl2IGlkPSJzaG93X2JhciI+PGEgaHJlZj0iY2hhdC5waHA/aXdiPXJlYWQmYW1wO2NpZD0nLiRyWydpZCddLicmYW1wO3ZpZXdfbGlrZT0nLiRyWydpZCddLiciPicuJHRvdGFsbGlrZS4nPC9hPiAnLiRMQU5HWydsaWtlcyddLicgfCA8YSBocmVmPSJjaGF0LnBocD9pd2I9cmVhZCZhbXA7Y2lkPScuJHJbJ2lkJ10uJyI+Jy4kdG90YWxjb20uJzwvYT4gJy4kTEFOR1snY29tbWVudHMnXS4nPC9kaXY+JzsKZWNobyAnPG9sPic7CmlmIChpc3NldCgkX0dFVFsndmlld19saWtlJ10pKQp7CmlmICgkdG90YWxsaWtlID09IDApCnsKZWNobyAnPGxpIGNsYXNzPSJyb3cwIj4nLiRMQU5HWydlbXB0eSddLic8L2xpPic7Cn0KZWxzZQp7CiRwYWdlPWh0bWxlbnRpdGllcygkX0dFVFsncGFnZSddKTsKJHRvdGFsID0gJHRvdGFsbGlrZTsKJGdwID0gY2VpbCgkdG90YWwgLyAkc2l0ZVsnbnVtX3Bvc3RfbWFpbiddKTsKaWYgKGVtcHR5KCRwYWdlKSB8fCAhY3R5cGVfZGlnaXQoJHBhZ2UpIHx8ICRwYWdlID4gJGdwKQokcGFnZT0kZ3A7CmlmICgkcGFnZT09JzAnKQokcGFnZT0nMSc7CiRwYWdlLS07CiRtYXhfdmlldz0kc2l0ZVsnbnVtX3Bvc3RfbWFpbiddOwokbGltaXQ9JHBhZ2UqJG1heF92aWV3OwokcGFnZSsrOwokbGlrPW15c3FsX3F1ZXJ5KCJzZWxlY3QgdXNlcl9pZCwgdGltZSBmcm9tIGNoYXRfbGlrZSB3aGVyZSBjaGF0X2lkPSciLiRyWydpZCddLiInIG9yZGVyIGJ5IHRpbWUgYXNjIGxpbWl0ICRsaW1pdCwkbWF4X3ZpZXciKTsKd2hpbGUgKCRyZXM9bXlzcWxfZmV0Y2hfYXJyYXkoJGxpaykpCnsKZWNobyAkaSAlIDIgPyAnPGxpIGNsYXNzPSJyb3cwIj4nIDogJzxsaSBjbGFzcz0icm93MSI+JzsKJHVzcj1teXNxbF9mZXRjaF9hcnJheShteXNxbF9xdWVyeSgic2VsZWN0IG5hbWUsIGF1dGhvciwgYWRtaW4gZnJvbSB1c2VyIHdoZXJlIGlkPSciLiRyZXNbJ3VzZXJfaWQnXS4iJyIpKTsKZWNobyAnPGltZyBzcmM9IicuJHNpdGVbJ3VybCddLicvaW1nLnBocD9pbWc9Jy4kcmVzWyd1c2VyX2lkJ10uJy5qcGcmYW1wO3c9NDAmYW1wO2g9NDAiIGFsdD0iIi8+IDxhIGhyZWY9InVzZXIucGhwP2lkPScuJHJlc1sndXNlcl9pZCddLiciPic7CmlmICgoJHVzclsnYXV0aG9yJ10gPT0gJzEnKSAmJiAoJHVzclsnYWRtaW4nXSA9PSAnMCcpKQp7CmVjaG8gJzxmb250IGNvbG9yPSJncmVlbiI+Jy5odG1sc3BlY2lhbGNoYXJzKCR1c3JbJ25hbWUnXSkuJzwvZm9udD4nOwp9CgplbHNlaWYgKCgkdXNyWydhdXRob3InXSA9PSAnMicpICYmICgkdXNyWydhZG1pbiddID09ICcwJykpCnsKZWNobyAnPGZvbnQgY29sb3I9InJlZCI+Jy5odG1sc3BlY2lhbGNoYXJzKCR1c3JbJ25hbWUnXSkuJzwvZm9udD4nOwp9CgplbHNlaWYgKCgkdXNyWydhdXRob3InXSA9PSAnMycpICYmICgkdXNyWydhZG1pbiddID09ICcwJykpCnsKZWNobyAnPGZvbnQgY29sb3I9ImJsdWUiPicuaHRtbHNwZWNpYWxjaGFycygkdXNyWyduYW1lJ10pLic8L2ZvbnQ+JzsKfQoKZWxzZWlmICgoJHVzclsnYXV0aG9yJ10gPT0gJzQnKSAmJiAoJHVzclsnYWRtaW4nXSA9PSAnMCcpKQp7CmVjaG8gJzxmb250IGNvbG9yPSJvcmFuZ2UiPicuaHRtbHNwZWNpYWxjaGFycygkdXNyWyduYW1lJ10pLic8L2ZvbnQ+JzsKfQplbHNlaWYgKCR1c3JbJ2FkbWluJ10gPT0gJzEnKQp7CmVjaG8gJzxmb250IGNvbG9yPSIjNzMxMTc0Ij4nLmh0bWxzcGVjaWFsY2hhcnMoJHVzclsnbmFtZSddKS4nPC9mb250Pic7Cn0KZWxzZQp7CmVjaG8gJzxmb250IGNvbG9yPSJibGFjayI+Jy5odG1sc3BlY2lhbGNoYXJzKCR1c3JbJ25hbWUnXSkuJzwvZm9udD4nOwp9CmVjaG8gJzwvYT48YnIvPjxzcGFuIGNvbG9yPSIjNjY2NjY2Ij4nLnRpbWVfYWdvKCRyZXNbJ3RpbWUnXSkuJzwvc3Bhbj4nOworKyRpOwplY2hvICc8L2xpPic7Cn0KJGxpbms9J2NoYXQucGhwP2l3Yj1yZWFkJmFtcDtjaWQ9Jy4kclsnaWQnXS4nJmFtcDt2aWV3X2xpa2U9Jy4kclsnaWQnXS4nJmFtcDtwYWdlPSc7CiRxPScnOwpwYWdpbmF0aW9uKCRwYWdlLCRtYXhfdmlldywkdG90YWwsJGxpbmssJHEpOwp9Cn0KZWxzZQp7CmlmICgkdG90YWxjb20gPT0gMCkKewplY2hvICc8bGkgY2xhc3M9InJvdzAiPicuJExBTkdbJ2VtcHR5J10uJzwvbGk+JzsKfQplbHNlCnsKJHBhZ2U9aHRtbGVudGl0aWVzKCRfR0VUWydwYWdlJ10pOwokdG90YWwgPSAkdG90YWxjb207CiRncCA9IGNlaWwoJHRvdGFsIC8gJHNpdGVbJ251bV9wb3N0X21haW4nXSk7CmlmIChlbXB0eSgkcGFnZSkgfHwgIWN0eXBlX2RpZ2l0KCRwYWdlKSB8fCAkcGFnZSA+ICRncCkKJHBhZ2U9JGdwOwppZiAoJHBhZ2U9PScwJykKJHBhZ2U9JzEnOwokcGFnZS0tOwokbWF4X3ZpZXc9JHNpdGVbJ251bV9wb3N0X21haW4nXTsKJGxpbWl0PSRwYWdlKiRtYXhfdmlldzsKJHBhZ2UrKzsKJGNvbT1teXNxbF9xdWVyeSgic2VsZWN0ICogZnJvbSBjaGF0X2NvbW1lbnQgd2hlcmUgY2hhdF9pZD0nIi4kclsnaWQnXS4iJyBvcmRlciBieSB0aW1lIGFzYyBsaW1pdCAkbGltaXQsJG1heF92aWV3Iik7CndoaWxlICgkcmVzPW15c3FsX2ZldGNoX2FycmF5KCRjb20pKQp7CmVjaG8gJGkgJSAyID8gJzxsaSBjbGFzcz0icm93MCI+JyA6ICc8bGkgY2xhc3M9InJvdzEiPic7CiR1c3I9bXlzcWxfZmV0Y2hfYXJyYXkobXlzcWxfcXVlcnkoInNlbGVjdCBuYW1lLCBhdXRob3IsIGFkbWluIGZyb20gdXNlciB3aGVyZSBpZD0nIi4kcmVzWyd1c2VyX2lkJ10uIiciKSk7CmVjaG8gJzxpbWcgc3JjPSInLiRzaXRlWyd1cmwnXS4nL2ltZy5waHA/aW1nPScuJHJlc1sndXNlcl9pZCddLicuanBnJmFtcDt3PTQwJmFtcDtoPTQwIiBhbHQ9IiIvPiA8YSBocmVmPSJ1c2VyLnBocD9pZD0nLiRyZXNbJ3VzZXJfaWQnXS4nIj4nOwppZiAoKCR1c3JbJ2F1dGhvciddID09ICcxJykgJiYgKCR1c3JbJ2FkbWluJ10gPT0gJzAnKSkKewplY2hvICc8Zm9udCBjb2xvcj0iZ3JlZW4iPicuaHRtbHNwZWNpYWxjaGFycygkdXNyWyduYW1lJ10pLic8L2ZvbnQ+JzsKfQoKZWxzZWlmICgoJHVzclsnYXV0aG9yJ10gPT0gJzInKSAmJiAoJHVzclsnYWRtaW4nXSA9PSAnMCcpKQp7CmVjaG8gJzxmb250IGNvbG9yPSJyZWQiPicuaHRtbHNwZWNpYWxjaGFycygkdXNyWyduYW1lJ10pLic8L2ZvbnQ+JzsKfQoKZWxzZWlmICgoJHVzclsnYXV0aG9yJ10gPT0gJzMnKSAmJiAoJHVzclsnYWRtaW4nXSA9PSAnMCcpKQp7CmVjaG8gJzxmb250IGNvbG9yPSJibHVlIj4nLmh0bWxzcGVjaWFsY2hhcnMoJHVzclsnbmFtZSddKS4nPC9mb250Pic7Cn0KCmVsc2VpZiAoKCR1c3JbJ2F1dGhvciddID09ICc0JykgJiYgKCR1c3JbJ2FkbWluJ10gPT0gJzAnKSkKewplY2hvICc8Zm9udCBjb2xvcj0ib3JhbmdlIj4nLmh0bWxzcGVjaWFsY2hhcnMoJHVzclsnbmFtZSddKS4nPC9mb250Pic7Cn0KZWxzZWlmICgkdXNyWydhZG1pbiddID09ICcxJykKewplY2hvICc8Zm9udCBjb2xvcj0iIzczMTE3NCI+Jy5odG1sc3BlY2lhbGNoYXJzKCR1c3JbJ25hbWUnXSkuJzwvZm9udD4nOwp9CmVsc2UKewplY2hvICc8Zm9udCBjb2xvcj0iYmxhY2siPicuaHRtbHNwZWNpYWxjaGFycygkdXNyWyduYW1lJ10pLic8L2ZvbnQ+JzsKfQplY2hvICc8L2E+OiAnLmJic20oJHJlc1sndGV4dCddKS4nPGJyLz48c3BhbiBjb2xvcj0iIzY2NjY2NiI+Jy50aW1lX2FnbygkcmVzWyd0aW1lJ10pLic8L3NwYW4+JzsKaWYgKCRyWyd1c2VyX2lkJ10gPT0gJHVzZXJfaWQgfHwgJHJlc1sndXNlcl9pZCddID09ICR1c2VyX2lkIHx8ICRpc19hZG1pbikKZWNobyAnIDxhIGhyZWY9IicuJHNpdGVbJ3VybCddLicvY2hhdC5waHA/aXdiPXJlYWQmYW1wO2NpZD0nLiRyWydpZCddLicmYW1wO2RlbGNvbT0nLiRyZXNbJ2lkJ10uJyI+Jy4kTEFOR1snZGVsZXRlJ10uJzwvYT4nOworKyRpOwplY2hvICc8L2xpPic7Cn0KJGxpbms9J2NoYXQucGhwP2l3Yj1yZWFkJmFtcDtjaWQ9Jy4kclsnaWQnXS4nJmFtcDtwYWdlPSc7CiRxPScnOwpwYWdpbmF0aW9uKCRwYWdlLCRtYXhfdmlldywkdG90YWwsJGxpbmssJHEpOwp9CmlmICgkZXJjKQplY2hvICc8bGk+PGZvbnQgY29sb3I9InJlZCI+Jy4kZXJjLic8L2ZvbnQ+PC9saT4nOwplY2hvICc8aHI+PC9ocj48Zm9ybSBhY3Rpb249IicuJHNpdGVbJ3VybCddLicvY2hhdC5waHA/aXdiPXJlYWQmYW1wO2NpZD0nLiRyWydpZCddLiciIG1ldGhvZD0icG9zdCI+PHRleHRhcmVhIGNsYXNzPSJpd2ItdGV4dGFyZWEiIG5hbWU9ImNvbW1lbnQiIHJvd3M9IjMiIGNvbHM9IjMwIj48L3RleHRhcmVhPjxici8+PGlucHV0IGNsYXNzPSJpd2ItYnV0dG9uIiBuYW1lPSJjb21tZW50X2NoYXQiIHR5cGU9InN1Ym1pdCIgdmFsdWU9IicuJExBTkdbJ3NlbmQnXS4nIi8+PC9mb3JtPic7Cn0KZWNobyAnPC9vbD4nOwplY2hvICc8L2Rpdj48L2Rpdj4nOwpyZXF1aXJlX29uY2UoJ2luYy9mb290LnBocCcpOwp9CmJyZWFrOwpjYXNlICdkZWxldGUnOgokcmVzPWh0bWxlbnRpdGllcygkX0dFVFsncmVzJ10pOwppZiAoISR1c2VyX2lkKQpyZWxvZ2luKCk7Cgokb2wgPSB0aW1lKCkgLSAzMDA7CgokdXNlcl9vbD1teXNxbF9yZXN1bHQobXlzcWxfcXVlcnkoIlNFTEVDVCBDT1VOVCgqKSBGUk9NIHVzZXIgV0hFUkUgbGFzdGRhdGUgPiAkb2wiKSwgMCk7CiRyZXM9JF9HRVRbJ3JlcyddOwppZiAoJHJlcyAhPSAnYWxsJykKewokY2VrPW15c3FsX3F1ZXJ5KCJzZWxlY3QgKiBmcm9tIGNoYXQgd2hlcmUgaWQ9JyIubXlzcWxfcmVhbF9lc2NhcGVfc3RyaW5nKCRyZXMpLiInIik7CmlmIChteXNxbF9udW1fcm93cygkY2VrKSA9PSAwKQp7CnJlcXVpcmVfb25jZSgnaW5jL2hlYWQucGhwJyk7CnBhZ2Vfbm90X2ZvdW5kKCk7CnJlcXVpcmVfb25jZSgnaW5jL2Zvb3QucGhwJyk7CmV4aXQ7Cn0KJHVzPW15c3FsX2ZldGNoX2FycmF5KCRjZWspOwppZiAoJHVzWyd1c2VyX2lkJ10gIT0gJHVzZXJfaWQgJiYgCighJGlzX2FkbWluKSkKewpyZXF1aXJlX29uY2UoJ2luYy9oZWFkLnBocCcpOwpmb3JiaWRkZW4oKTsKcmVxdWlyZV9vbmNlKCdpbmMvZm9vdC5waHAnKTsKZXhpdDsKfQp9CgppZiAoaXNzZXQoJF9QT1NUWydubyddKSkKewpoZWFkZXIoJ2xvY2F0aW9uOiBjaGF0LnBocCcpOwpleGl0Owp9CmlmIChpc3NldCgkX1BPU1RbJ3llcyddKSkKewppZiAoJHJlcyA9PSAnYWxsJyAmJiAkaXNfYWRtaW4pCnsKbXlzcWxfcXVlcnkoIlRSVU5DQVRFIFRBQkxFIGNoYXQiKTsKbXlzcWxfcXVlcnkoIlRSVU5DQVRFIFRBQkxFIGNoYXRfbGlrZSIpOwpteXNxbF9xdWVyeSgiVFJVTkNBVEUgVEFCTEUgY2hhdF9jb21tZW50Iik7Cn0KaWYgKCRyZXMgIT0gJ2FsbCcpCnsKaWYgKCR1c1sndXNlcl9pZCddID09ICR1c2VyX2lkIHx8ICRpc19hZG1pbikKewpteXNxbF9xdWVyeSgiZGVsZXRlIGZyb20gY2hhdCB3aGVyZSBpZD0nIi4kdXNbJ2lkJ10uIiciKTsKbXlzcWxfcXVlcnkoImRlbGV0ZSBmcm9tIGNoYXRfbGlrZSB3aGVyZSBjaGF0X2lkPSciLiR1c1snaWQnXS4iJyIpOwpteXNxbF9xdWVyeSgiZGVsZXRlIGZyb20gY2hhdF9jb21tZW50IHdoZXJlIGNoYXRfaWQ9JyIuJHVzWydpZCddLiInIik7Cn0KfQpoZWFkZXIoJ2xvY2F0aW9uOiBjaGF0LnBocCcpOwpleGl0Owp9CgokaGVhZF90aXRsZT0kTEFOR1snZGVsZXRlJ107CnJlcXVpcmVfb25jZSgnaW5jL2hlYWQucGhwJyk7CmVjaG8gJzxkaXYgaWQ9Im1lc3NhZ2UiPic7CmVjaG8gJzwvZGl2Pgo8ZGl2IGlkPSJjb250ZW50Ij4KPGRpdiBpZD0ibWFpbi1jb250ZW50Ij4nOwplY2hvICc8ZGl2IGlkPSJzaG93X2JhciI+PGEgaHJlZj0iY2hhdC5waHA/Ij4nLiRMQU5HWydjaGF0cm9vbSddLic8L2E+IHwgPGEgaHJlZj0iY2hhdC5waHA/d3JpdGUiPicuJExBTkdbJ3dyaXRlJ10uJzwvYT4gfCA8YSBocmVmPSJvbmxpbmUucGhwIj5PbmxpbmU8L2E+ICgnLiR1c2VyX29sLicpIHwgJy4kTEFOR1snZGVsZXRlX2FsbCddLic8L2E+JzsKZWNobyAnPC9kaXY+JzsKaWYgKCRyZXMgPT0gJ2FsbCcpCnsKaWYgKCEkaXNfYWRtaW4pCnsKcmVxdWlyZV9vbmNlKCdpbmMvaGVhZC5waHAnKTsKZm9yYmlkZGVuKCk7CnJlcXVpcmVfb25jZSgnaW5jL2Zvb3QucGhwJyk7CmV4aXQ7Cn0KZWNobyAnPGNlbnRlcj4nLiRMQU5HWydkZWxldGVfY29uZmlybSddLic8YnIvPjxmb3JtIG1ldGhvZD0icG9zdCIgYWN0aW9uPSJjaGF0LnBocD9pd2I9ZGVsZXRlJmFtcDtyZXM9YWxsIj48ZGl2IGNsYXNzPSJ0d28tY29sLWJ0biI+PGlucHV0IGNsYXNzPSJpd2ItYnV0b24iIHR5cGU9InN1Ym1pdCIgbmFtZT0ieWVzIiB2YWx1ZT0iJy4kTEFOR1sneWVzJ10uJyIvPjxpbnB1dCBjbGFzcz0iaXdiLWJ1dG9uIiB0eXBlPSJzdWJtaXQiIG5hbWU9Im5vIiB2YWx1ZT0iJy4kTEFOR1snbm8nXS4nIi8+PC9kaXY+PC9mb3JtPjwvY2VudGVyPic7Cn0KCmlmICgkcmVzICE9ICdhbGwnKQplY2hvICc8Y2VudGVyPicuJExBTkdbJ2RlbGV0ZV9jb25maXJtJ10uJzxici8+PGZvcm0gbWV0aG9kPSJwb3N0IiBhY3Rpb249ImNoYXQucGhwP2l3Yj1kZWxldGUmYW1wO3Jlcz0nLmh0bWxlbnRpdGllcygkcmVzKS4nIj48ZGl2IGNsYXNzPSJ0d28tY29sLWJ0biI+PGlucHV0IGNsYXNzPSJpd2ItYnV0b24iIHR5cGU9InN1Ym1pdCIgbmFtZT0ieWVzIiB2YWx1ZT0iJy4kTEFOR1sneWVzJ10uJyIvPjxpbnB1dCBjbGFzcz0iaXdiLWJ1dG9uIiB0eXBlPSJzdWJtaXQiIG5hbWU9Im5vIiB2YWx1ZT0iJy4kTEFOR1snbm8nXS4nIi8+PC9kaXY+PC9mb3JtPjwvY2VudGVyPic7CmVjaG8gJzwvZGl2PjwvZGl2Pic7CnJlcXVpcmVfb25jZSgnaW5jL2Zvb3QucGhwJyk7CmJyZWFrOwpkZWZhdWx0OgppZiAoISR1c2VyX2lkKQpyZWxvZ2luKCk7CgokcGFnZT1odG1sZW50aXRpZXMoJF9HRVRbJ3BhZ2UnXSk7CiR0b3RhbD1teXNxbF9yZXN1bHQobXlzcWxfcXVlcnkoInNlbGVjdCBjb3VudCgqKSBhcyBudW0gZnJvbSBjaGF0IiksIDApOwppZiAoZW1wdHkoJHBhZ2UpIHx8ICRwYWdlID09IDAgfHwgIWN0eXBlX2RpZ2l0KCRwYWdlKSB8fCAkcGFnZSA+IChjZWlsKCR0b3RhbCAvICRzaXRlWydudW1fcG9zdF9tYWluJ10pKSkKJHBhZ2U9JzEnOwokcGFnZS0tOwokbWF4X3ZpZXc9JHNpdGVbJ251bV9wb3N0X21haW4nXTsKJGxpbWl0PSRwYWdlKiRtYXhfdmlldzsKJHBhZ2UrKzsKaWYgKGlzc2V0KCRfUE9TVFsnY2hhdCddKSkKewppZiAoISR1c2VyX2lkKQpyZWxvZ2luKCk7CiRtc2c9JF9QT1NUWydtc2cnXTsKaWYgKG1iX3N0cmxlbigkbXNnKSA+IDUwMCkKJGVycj1zdHJfcmVwbGFjZSgnOjpudW1iZXI6OicsJzUwMCcsJExBTkdbJ3RleHRfbWF4J10pOwppZiAoZW1wdHkoJG1zZykpCiRlcnI9JExBTkdbJ2VtcHR5X3RleHQnXTsKaWYgKCRpbmRvd2FwYmxvZ1snY3JlZGl0J10gPCAxMCkKJGVycj1zdHJfcmVwbGFjZSgnOjpudW1iZXI6OicsJzEwJyxzdHJfcmVwbGFjZSgnOjptb3JlOjonLCc8YSBocmVmPSJhZG1pbi5waHA/aXdiPWNyZWRpdCI+Jy4kTEFOR1snbW9yZSddLicgJnJhcXVvOzwvYT4nLCRMQU5HWydtaW5pbV9jcmVkaXQnXSkpOwppZiAoZW1wdHkoJGVycikpCnsKJGtyZWRpdCA9ICRpbmRvd2FwYmxvZ1snY3JlZGl0J10gLSAxMDsKbXlzcWxfcXVlcnkoInVwZGF0ZSB1c2VyIHNldCBjcmVkaXQ9JyIuJGtyZWRpdC4iJyB3aGVyZSBpZD0nIi4kdXNlcl9pZC4iJyIpOwpteXNxbF9xdWVyeSgiaW5zZXJ0IGludG8gY2hhdCBzZXQgdXNlcl9pZD0nIi4kdXNlcl9pZC4iJywgdGV4dD0nIi5teXNxbF9yZWFsX2VzY2FwZV9zdHJpbmcoJG1zZykuIicsIHRpbWU9JyIudGltZSgpLiInIik7CmhlYWRlcignbG9jYXRpb246IGNoYXQucGhwJyk7Cn0KZWxzZQp7CiRub3RpZj0nPG9sIGlkPSJlcnJvciI+PGxpPicuJGVyci4nPC9saT48L29sPic7Cn0KfQoKJG9sID0gdGltZSgpIC0gMzAwOwoKJHVzZXJfb2w9bXlzcWxfcmVzdWx0KG15c3FsX3F1ZXJ5KCJTRUxFQ1QgQ09VTlQoKikgRlJPTSB1c2VyIFdIRVJFIGxhc3RkYXRlID4gJG9sIiksIDApOwoKJGhlYWRfdGl0bGU9JExBTkdbJ2NoYXRyb29tJ107CnJlcXVpcmVfb25jZSgnaW5jL2hlYWQucGhwJyk7CmVjaG8gJzxkaXYgaWQ9Im1lc3NhZ2UiPic7CmlmICghZW1wdHkoJG5vdGlmKSkKZWNobyAkbm90aWY7CmVjaG8gJzwvZGl2Pgo8ZGl2IGlkPSJjb250ZW50Ij4KPGRpdiBpZD0ibWFpbi1jb250ZW50Ij4nOwplY2hvICc8ZGl2IGlkPSJzaG93X2JhciI+PGEgaHJlZj0iY2hhdC5waHA/d3JpdGUiPicuJExBTkdbJ3dyaXRlJ10uJzwvYT4gfCA8YSBocmVmPSJiYnNtLnBocD9pd2I9c21pbGV5Ij4nLiRMQU5HWydzbWlsZXknXS4nPC9hPiB8IDxhIGhyZWY9ImJic20ucGhwP2l3Yj1iYmNvZGUiPicuJExBTkdbJ2JiY29kZSddLic8L2E+IHwgPGEgaHJlZj0iY2hhdC5waHA/Jy50aW1lKCkuJyI+Jy4kTEFOR1sncmVmcmVzaCddLic8L2E+IHwgPGEgaHJlZj0ib25saW5lLnBocCI+T25saW5lPC9hPiAoJy4kdXNlcl9vbC4nKSc7CmlmICgkaXNfYWRtaW4pCmVjaG8gJyB8IDxhIGhyZWY9ImNoYXQucGhwP2l3Yj1kZWxldGUmYW1wO3Jlcz1hbGwiPicuJExBTkdbJ2RlbGV0ZV9hbGwnXS4nPC9hPic7CmVjaG8gJzwvZGl2Pic7CmlmIChpc3NldCgkX0dFVFsnd3JpdGUnXSkpCnsKZWNobyAnPGZvcm0gYWN0aW9uPSJjaGF0LnBocD93cml0ZSIgbWV0aG9kPSJwb3N0Ij48dGV4dGFyZWEgY2xhc3M9Iml3Yi10ZXh0YXJlYSIgbmFtZT0ibXNnIiByb3dzPSIzIiBjb2xzPSIzMCI+PC90ZXh0YXJlYT48YnIvPjxpbnB1dCBjbGFzcz0iaXdiLWJ1dHRvbiIgbmFtZT0iY2hhdCIgdHlwZT0ic3VibWl0IiB2YWx1ZT0iJy4kTEFOR1snc2VuZCddLiciLz48L2Zvcm0+JzsKfQplY2hvICc8b2wgc3R5bGU9Imxpc3Qtc3R5bGU6IG5vbmU7IG1hcmdpbjogMTBweCAwcHggMHB4IDBweDsgcGFkZGluZzogMHB4OyI+JzsKCmlmICgkdG90YWwgIT0gMCkKewokcmVxPW15c3FsX3F1ZXJ5KCJzZWxlY3QgKiBmcm9tIGNoYXQgb3JkZXIgYnkgdGltZSBkZXNjIGxpbWl0ICRsaW1pdCwkbWF4X3ZpZXciKTsKd2hpbGUgKCRyZXM9bXlzcWxfZmV0Y2hfYXJyYXkoJHJlcSkpCnsKZWNobyAkaSAlIDIgPyAnPGxpIGNsYXNzPSJyb3cwIj4nIDogJzxsaSBjbGFzcz0icm93MSI+JzsKJHVzcj1teXNxbF9mZXRjaF9hcnJheShteXNxbF9xdWVyeSgic2VsZWN0IG5hbWUsIGF1dGhvciwgYWRtaW4gZnJvbSB1c2VyIHdoZXJlIGlkPSciLiRyZXNbJ3VzZXJfaWQnXS4iJyIpKTsKZWNobyAnPGltZyBzcmM9IicuJHNpdGVbJ3VybCddLicvaW1nLnBocD9pbWc9Jy4kcmVzWyd1c2VyX2lkJ10uJy5qcGcmYW1wO3c9NDAmYW1wO2g9NDAiIGFsdD0iIi8+IDxhIGhyZWY9InVzZXIucGhwP2lkPScuJHJlc1sndXNlcl9pZCddLiciPic7CmlmICgoJHVzclsnYXV0aG9yJ10gPT0gJzEnKSAmJiAoJHVzclsnYWRtaW4nXSA9PSAnMCcpKQp7CmVjaG8gJzxmb250IGNvbG9yPSJncmVlbiI+Jy5odG1sc3BlY2lhbGNoYXJzKCR1c3JbJ25hbWUnXSkuJzwvZm9udD4nOwp9CgplbHNlaWYgKCgkdXNyWydhdXRob3InXSA9PSAnMicpICYmICgkdXNyWydhZG1pbiddID09ICcwJykpCnsKZWNobyAnPGZvbnQgY29sb3I9InJlZCI+Jy5odG1sc3BlY2lhbGNoYXJzKCR1c3JbJ25hbWUnXSkuJzwvZm9udD4nOwp9CgplbHNlaWYgKCgkdXNyWydhdXRob3InXSA9PSAnMycpICYmICgkdXNyWydhZG1pbiddID09ICcwJykpCnsKZWNobyAnPGZvbnQgY29sb3I9ImJsdWUiPicuaHRtbHNwZWNpYWxjaGFycygkdXNyWyduYW1lJ10pLic8L2ZvbnQ+JzsKfQoKZWxzZWlmICgoJHVzclsnYXV0aG9yJ10gPT0gJzQnKSAmJiAoJHVzclsnYWRtaW4nXSA9PSAnMCcpKQp7CmVjaG8gJzxmb250IGNvbG9yPSJvcmFuZ2UiPicuaHRtbHNwZWNpYWxjaGFycygkdXNyWyduYW1lJ10pLic8L2ZvbnQ+JzsKfQplbHNlaWYgKCR1c3JbJ2FkbWluJ10gPT0gJzEnKQp7CmVjaG8gJzxmb250IGNvbG9yPSIjNzMxMTc0Ij4nLmh0bWxzcGVjaWFsY2hhcnMoJHVzclsnbmFtZSddKS4nPC9mb250Pic7Cn0KZWxzZQp7CmVjaG8gJzxmb250IGNvbG9yPSJibGFjayI+Jy5odG1sc3BlY2lhbGNoYXJzKCR1c3JbJ25hbWUnXSkuJzwvZm9udD4nOwp9CmVjaG8gJzwvYT46ICc7CmlmIChtYl9zdHJsZW4oJHJlc1sndGV4dCddKSA+IDE1MCkKZWNobyAnJy5iYnNtKHN1YnN0cigkcmVzWyd0ZXh0J10sMCwxNTApKS4nIFs8YSBocmVmPSInLiRzaXRlWyd1cmwnXS4nL2NoYXQucGhwP2l3Yj1yZWFkJmFtcDtjaWQ9Jy4kcmVzWydpZCddLiciPi4uLjwvYT5dJzsKZWxzZQplY2hvIGJic20oJHJlc1sndGV4dCddKTsKaWYgKCgkcmVzWyd1c2VyX2lkJ10gPT0gJHVzZXJfaWQpIHx8ICgkaXNfYWRtaW4pKQplY2hvICcgPGEgaHJlZj0iY2hhdC5waHA/aXdiPWRlbGV0ZSZhbXA7cmVzPScuJHJlc1snaWQnXS4nIj5IYXB1czwvYT4nOwplY2hvICc8YnIvPjxzcGFuIGNvbG9yPSIjNjY2NjY2Ij4nLnRpbWVfYWdvKCRyZXNbJ3RpbWUnXSkuJzwvc3Bhbj48YnIvPic7CiRsaWtlPW15c3FsX3F1ZXJ5KCJzZWxlY3QgKiBmcm9tIGNoYXRfbGlrZSB3aGVyZSBjaGF0X2lkPSciLiRyZXNbJ2lkJ10uIiciKTsKJHRvdGFsbGlrZT1teXNxbF9udW1fcm93cygkbGlrZSk7CiRjbSA9IG15c3FsX3F1ZXJ5KCJzZWxlY3QgKiBmcm9tIGNoYXRfY29tbWVudCB3aGVyZSBjaGF0X2lkPSciLiRyZXNbJ2lkJ10uIiciKTsKJHRvdGFsY29tPW15c3FsX251bV9yb3dzKCRjbSk7CmVjaG8gJzxzbWFsbD48YSBocmVmPSInLiRzaXRlWyd1cmwnXS4nL2NoYXQucGhwP2l3Yj1yZWFkJmFtcDtjaWQ9Jy4kcmVzWydpZCddLicmYW1wO3ZpZXdfbGlrZT0nLiRyZXNbJ2lkJ10uJyI+Jy4kdG90YWxsaWtlLicgU3VrYTwvYT4gfCA8YSBocmVmPSInLiRzaXRlWyd1cmwnXS4nL2NoYXQucGhwP2l3Yj1yZWFkJmFtcDtjaWQ9Jy4kcmVzWydpZCddLiciPicuJHRvdGFsY29tLicgS29tZW50YXI8L2E+PC9zbWFsbD4nOworKyRpOwplY2hvICc8L2xpPic7Cn0KfQplbHNlCnsKZWNobyAnPGxpPicuJExBTkdbJ2VtcHR5J10uJzwvbGk+JzsKfQplY2hvICc8L29sPjwvZGl2Pic7CgokbGluaz0nY2hhdC5waHA/cGFnZT0nOwokcT0nJzsKcGFnaW5hdGlvbigkcGFnZSwkbWF4X3ZpZXcsJHRvdGFsLCRsaW5rLCRxKTsKCmVjaG8gJzwvZGl2Pic7CnJlcXVpcmVfb25jZSgnaW5jL2Zvb3QucGhwJyk7Cn0K"));
?>