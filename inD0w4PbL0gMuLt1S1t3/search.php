<?php
/*
*Nama Script: IndoWapBlog Multi Site
*Pembuat: Achunk JealousMan
*Email: achunk17[at]gmail[dot]com
*Situs: http://indowapblog.com
*Facebook: http://www.facebook.com/achunks
*/

eval(base64_decode("DQoNCi8qCipOYW1hIFNjcmlwdDogSW5kb1dhcEJsb2cgTXVsdGkgU2l0ZQoqVmVyc2k6IChMaWhhdCBWRVJTSU9OLnR4dCkKKlBlbWJ1YXQ6IEFjaHVuayBKZWFsb3VzTWFuCipFbWFpbDogYWNodW5rMTdbYXRdZ21haWxbZG90XWNvbQoqU2l0dXM6IGh0dHA6Ly9pbmRvd2FwYmxvZy5jb20KKkZhY2Vib29rOiBodHRwOi8vd3d3LmZhY2Vib29rLmNvbS9hY2h1bmtzCiovCgpkZWZpbmUoJ19JV0JfJywgMSk7DQoKcmVxdWlyZV9vbmNlKCdpbmMvaW5kb3dhcGJsb2cucGhwJyk7DQokcT1pc3NldCgkX0dFVFsncSddKSA/IHRyaW0odXJsZW5jb2RlKCRfR0VUWydxJ10pKSA6ICcnOwppZiAoaXNzZXQoJF9HRVRbJ3EnXSkpCnsKJHBhZ2U9JF9HRVRbJ3BhZ2UnXTsKJHRvdGFsPW15c3FsX3Jlc3VsdChteXNxbF9xdWVyeSgiU0VMRUNUIENPVU5UKCopIGFzIE51bSBGUk9NIGJsb2cgV0hFUkUgdGl0bGUgTElLRSAnJSIubXlzcWxfcmVhbF9lc2NhcGVfc3RyaW5nKHVybGRlY29kZSgkcSkpLiIlJyBvciBkZXNjcmlwdGlvbiBMSUtFICclIi5teXNxbF9yZWFsX2VzY2FwZV9zdHJpbmcodXJsZGVjb2RlKCRxKSkuIiUnIGFuZCBkcmFmdD0nMCciKSwwKTsKaWYgKCFjdHlwZV9kaWdpdCgkcGFnZSkgfHwgZW1wdHkoJHBhZ2UpIHx8ICRwYWdlID09IDAgfHwgJHBhZ2UgPiAoY2VpbCgkdG90YWwgLyAkc2l0ZVsnbnVtX3Bvc3RfbWFpbiddKSkpDQokcGFnZT0nMSc7DQokcGFnZS0tOw0KJG1heF92aWV3PSRzaXRlWydudW1fcG9zdF9tYWluJ107DQokbGltaXQ9JHBhZ2UqJG1heF92aWV3Ow0KJHBhZ2UrKzsNCiRoZWFkX3RpdGxlPScnLiRMQU5HWydzZWFyY2hfZm9yJ10uJyAnLnVybGRlY29kZSgkcSk7Cn0KZWxzZQp7CiRoZWFkX3RpdGxlPSRMQU5HWydzZWFyY2gnXTsKfQpyZXF1aXJlX29uY2UoJ2luYy9oZWFkLnBocCcpOwplY2hvICc8c3R5bGUgdHlwZT0idGV4dC9jc3MiPgojaXBob25lLWxpc3Qge21hcmdpbjogMnB4OyBwYWRkaW5nOiAycHg7fQojaXBob25lLWxpc3QgbGkge2xpc3Qtc3R5bGUtdHlwZTogbm9uZTsgbWFyZ2luOiAycHg7IHBhZGRpbmc6IDJweDt9CiNpcGhvbmUtbGlzdCAuaGVhZGluZyB7bGlzdC1zdHlsZS10eXBlOiBub25lOyBtYXJnaW46IDJweDsgcGFkZGluZzogNnB4IDVweCA2cHggNXB4OyBiYWNrZ3JvdW5kLWNvbG9yOiAjMzMzMzMzOyBjb2xvcjogI0ZGRkZGRjsgZm9udC13ZWlnaHQ6IGJvbGQ7fQojaXBob25lLWxpc3QgbGkgYSB7IGRpc3BsYXk6YmxvY2s7IHBhZGRpbmc6IDZweCA1cHggNnB4IDVweDt9Ci5pcGhvbmUtbGlzdC1ib3JkZXIgbGkgYSB7Ym9yZGVyLXRvcDogMnB4IHNvbGlkICNCNEI0QjQ7fQojaXBob25lLWxpc3QgbGkgYTpob3Zlcgp7YmFja2dyb3VuZC1jb2xvcjogI0UxRTFFMTt9PC9zdHlsZT4nOwoKZWNobyAnPGRpdiBpZD0ibWVzc2FnZSI+JzsKZWNobyAnPC9kaXY+PGRpdiBpZD0iY29udGVudCI+PGRpdiBpZD0ibWFpbi1jb250ZW50Ij4nOwplY2hvICc8Zm9ybSBhY3Rpb249IicuJHNpdGVbJ3VybCddLicvc2VhcmNoLnBocCIgbWV0aG9kPSJnZXQiPjxkaXYgY2xhc3M9InR3by1jb2wtYnRuIj48aW5wdXQgY2xhc3M9Iml3Yi10ZXh0IiBuYW1lPSJxIiB0eXBlPSJ0ZXh0IiB2YWx1ZT0iJy5odG1sc3BlY2lhbGNoYXJzKHVybGRlY29kZSgkcSkpLiciLz48aW5wdXQgY2xhc3M9Iml3Yi1idXR0b24iIHR5cGU9InN1Ym1pdCIgc3R5bGU9IndpZHRoOiA1MCUiIHZhbHVlPSInLiRMQU5HWydzZWFyY2hfc3VibWl0J10uJyIvPjwvZGl2PjwvZm9ybT48YnIgLz4nOwppZiAoaXNzZXQoJF9HRVRbJ3EnXSkpCnsKZWNobyAnPHVsIGlkPSJpcGhvbmUtbGlzdCI+JzsKZWNobyAnPGxpIGNsYXNzPSJoZWFkaW5nIj4nLnN0cl9yZXBsYWNlKCc6Om51bWJlcjo6JywkdG90YWwsc3RyX3JlcGxhY2UoJzo6cXVlcnk6OicsaHRtbHNwZWNpYWxjaGFycyh1cmxkZWNvZGUoJHEpKSwkTEFOR1snc2VhcmNoX3Jlc3VsdCddKSkuJzwvbGk+JzsKaWYgKCR0b3RhbCA+IDApCnsKJHJlcT1teXNxbF9xdWVyeSgiU0VMRUNUICogRlJPTSBibG9nIFdIRVJFIHRpdGxlIExJS0UgJyUiLm15c3FsX3JlYWxfZXNjYXBlX3N0cmluZyh1cmxkZWNvZGUoJHEpKS4iJScgb3IgZGVzY3JpcHRpb24gTElLRSAnJSIubXlzcWxfcmVhbF9lc2NhcGVfc3RyaW5nKHVybGRlY29kZSgkcSkpLiIlJyBhbmQgZHJhZnQ9JzAnIE9SREVSIEJZIHRpbWUgREVTQyBMSU1JVCAkbGltaXQsJG1heF92aWV3Iik7CndoaWxlICgkcmVzPW15c3FsX2ZldGNoX2FycmF5KCRyZXEpKQp7CiRzaXRlX3Bvc3Q9bXlzcWxfZmV0Y2hfYXJyYXkobXlzcWxfcXVlcnkoIlNFTEVDVCBuYW1lLCB1cmwgRlJPTSBzaXRlIFdIRVJFIGlkPSciLiRyZXNbJ3NpdGVfaWQnXS4iJyIpKTsKZWNobyAnPGxpPjxhIGhyZWY9IicuJHNpdGVfcG9zdFsndXJsJ10uJy8nLiRyZXNbJ2xpbmsnXS4nLnhodG1sIj4nLmh0bWxzcGVjaWFsY2hhcnMoJHJlc1sndGl0bGUnXSkuJyB8ICcuaHRtbHNwZWNpYWxjaGFycygkc2l0ZV9wb3N0WyduYW1lJ10pLicgPGZvbnQgY29sb3I9IiM2NjY2NjYiPicudGltZV9hZ28oJHJlc1sndGltZSddKS4nPC9mb250PjwvYT48L2xpPic7Cn0KfQplbHNlCnsKZWNobyAnPGxpPicuJExBTkdbJ3NlYXJjaF9ub3RfZm91bmQnXS4nPC9saT4nOwp9CmVjaG8gJzwvdWw+JzsKJGxpbms9J3NlYXJjaC5waHA/cT0nLmh0bWxlbnRpdGllcygkcSkuJyZhbXA7cGFnZT0nOwokeD0nJzsKcGFnaW5hdGlvbigkcGFnZSwkbWF4X3ZpZXcsJHRvdGFsLCRsaW5rLCR4KTsKfQplbHNlIHsKfQplY2hvICc8L2Rpdj48L2Rpdj4nOwpyZXF1aXJlX29uY2UoJ2luYy9mb290LnBocCcpOwo/Pg=="));
?>