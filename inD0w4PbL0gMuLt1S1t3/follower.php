<?php
/*
*Nama Script: IndoWapBlog Multi Site
*Pembuat: Achunk JealousMan
*Email: achunk17[at]gmail[dot]com
*Situs: http://indowapblog.com
*Facebook: http://www.facebook.com/achunks
*/

eval(base64_decode("DQoNCi8qCipOYW1hIFNjcmlwdDogSW5kb1dhcEJsb2cgTXVsdGkgU2l0ZQoqVmVyc2k6IChMaWhhdCBWRVJTSU9OLnR4dCkKKlBlbWJ1YXQ6IEFjaHVuayBKZWFsb3VzTWFuCipFbWFpbDogYWNodW5rMTdbYXRdZ21haWxbZG90XWNvbQoqU2l0dXM6IGh0dHA6Ly9pbmRvd2FwYmxvZy5jb20KKkZhY2Vib29rOiBodHRwOi8vd3d3LmZhY2Vib29rLmNvbS9hY2h1bmtzCiovCgpkZWZpbmUoJ19JV0JfJywgMSk7DQoKcmVxdWlyZV9vbmNlKCdpbmMvaW5kb3dhcGJsb2cucGhwJyk7DQppZiAoISR1c2VyX2lkKQpyZWxvZ2luKCk7CgokcGFnZT0kX0dFVFsncGFnZSddOwokaWQ9aXNzZXQoJF9HRVRbJ2lkJ10pID8gdHJpbSgkX0dFVFsnaWQnXSkgOiAkdXNlcl9pZDsKJHJlcT1teXNxbF9xdWVyeSgic2VsZWN0IG5hbWUsIHNpdGUgZnJvbSB1c2VyIHdoZXJlIGlkPSciLm15c3FsX3JlYWxfZXNjYXBlX3N0cmluZygkaWQpLiInIik7CmlmIChteXNxbF9udW1fcm93cygkcmVxKSA9PSAwKQp7CnJlcXVpcmVfb25jZSgnaW5jL2hlYWQucGhwJyk7CnBhZ2Vfbm90X2ZvdW5kKCk7CnJlcXVpcmVfb25jZSgnaW5jL2Zvb3QucGhwJyk7CmV4aXQ7Cn0KJGY9bXlzcWxfZmV0Y2hfYXJyYXkoJHJlcSk7CgokdG90YWw9bXlzcWxfcmVzdWx0KG15c3FsX3F1ZXJ5KCJTRUxFQ1QgQ09VTlQoKikgQVMgTlVNIEZST00gYGZvbGxvd2luZ2AgV0hFUkUgYHNpdGVfaWRgIT0nIi5teXNxbF9yZWFsX2VzY2FwZV9zdHJpbmcoJGlkKS4iJyBBTkQgYHVybGA9JyIubXlzcWxfcmVhbF9lc2NhcGVfc3RyaW5nKCRmWydzaXRlJ10pLiInIiksIDApOwppZiAoIWN0eXBlX2RpZ2l0KCRwYWdlKSB8fCBlbXB0eSgkcGFnZSkgfHwgJHBhZ2UgPT0gMCB8fCAkcGFnZSA+IChjZWlsKCR0b3RhbCAvICRzaXRlWydudW1fcG9zdF9tYWluJ10pKSkNCiRwYWdlPScxJzsNCiRwYWdlLS07DQokbWF4X3ZpZXc9JHNpdGVbJ251bV9wb3N0X21haW4nXTsNCiRsaW1pdD0kcGFnZSokbWF4X3ZpZXc7DQokcGFnZSsrOw0KCiRoZWFkX3RpdGxlPScnLiRMQU5HWydmb2xsb3dlciddLicgJy5odG1sc3BlY2lhbGNoYXJzKCRmWyduYW1lJ10pLicnOwpyZXF1aXJlX29uY2UoJ2luYy9oZWFkLnBocCcpOwplY2hvICc8c3R5bGUgdHlwZT0idGV4dC9jc3MiPgojaXBob25lLWxpc3Qge21hcmdpbjogMnB4OyBwYWRkaW5nOiAycHg7fQojaXBob25lLWxpc3QgbGkge2xpc3Qtc3R5bGUtdHlwZTogbm9uZTsgbWFyZ2luOiAycHg7IHBhZGRpbmc6IDJweDt9CiNpcGhvbmUtbGlzdCAuaGVhZGluZyB7bGlzdC1zdHlsZS10eXBlOiBub25lOyBtYXJnaW46IDJweDsgcGFkZGluZzogNnB4IDVweCA2cHggNXB4OyBiYWNrZ3JvdW5kLWNvbG9yOiAjMzMzMzMzOyBjb2xvcjogI0ZGRkZGRjsgZm9udC13ZWlnaHQ6IGJvbGQ7fQojaXBob25lLWxpc3QgbGkgYSB7IGRpc3BsYXk6YmxvY2s7IHBhZGRpbmc6IDZweCA1cHggNnB4IDVweDt9Ci5pcGhvbmUtbGlzdC1ib3JkZXIgbGkgYSB7Ym9yZGVyLXRvcDogMnB4IHNvbGlkICNCNEI0QjQ7fQojaXBob25lLWxpc3QgbGkgYTpob3Zlcgp7YmFja2dyb3VuZC1jb2xvcjogI0UxRTFFMTt9PC9zdHlsZT4nOwoKZWNobyAnPGRpdiBpZD0ibWVzc2FnZSI+JzsKZWNobyAnPC9kaXY+PGRpdiBpZD0iY29udGVudCI+PGRpdiBpZD0ibWFpbi1jb250ZW50Ij48dWwgaWQ9ImlwaG9uZS1saXN0Ij4nOwplY2hvICc8bGkgY2xhc3M9ImhlYWRpbmciPicuJExBTkdbJ2ZvbGxvd2VyJ10uJyAnLmh0bWxzcGVjaWFsY2hhcnMoJGZbJ25hbWUnXSkuJzwvbGk+JzsKaWYgKCR0b3RhbCA+IDApCnsKJHJlcT1teXNxbF9xdWVyeSgic2VsZWN0IGBzaXRlX2lkYCBmcm9tIGBmb2xsb3dpbmdgIHdoZXJlIGBzaXRlX2lkYCE9JyIubXlzcWxfcmVhbF9lc2NhcGVfc3RyaW5nKCRpZCkuIicgYW5kIGB1cmxgPSAnIi4kZlsnc2l0ZSddLiInIG9yZGVyIGJ5IGB0aW1lYCBkZXNjIGxpbWl0ICRsaW1pdCwkbWF4X3ZpZXciKTsKd2hpbGUgKCRyZXM9bXlzcWxfZmV0Y2hfYXJyYXkoJHJlcSkpCnsKJGZvbGxvd2VyPW15c3FsX2ZldGNoX2FycmF5KG15c3FsX3F1ZXJ5KCJzZWxlY3QgbmFtZSwgdXJsIGZyb20gc2l0ZSB3aGVyZSBpZD0nIi4kcmVzWydzaXRlX2lkJ10uIiciKSk7CmVjaG8gJzxsaT48YSBocmVmPSInLiRmb2xsb3dlclsndXJsJ10uJyI+Jy5odG1sc3BlY2lhbGNoYXJzKCRmb2xsb3dlclsnbmFtZSddKS4nPC9hPjwvbGk+JzsKfQp9CmVsc2UKewplY2hvICc8bGk+Jy4kTEFOR1snZW1wdHknXS4nPC9saT4nOwp9CmVjaG8gJzwvdWw+JzsKJGxpbms9J2ZvbGxvd2VyLnBocD9pZD0nLmh0bWxzcGVjaWFsY2hhcnMoJGlkKS4nJmFtcDtwYWdlPSc7CiRxPScnOwpwYWdpbmF0aW9uKCRwYWdlLCRtYXhfdmlldywkdG90YWwsJGxpbmssJHEpOwplY2hvICc8L2Rpdj48L2Rpdj4nOwpyZXF1aXJlX29uY2UoJ2luYy9mb290LnBocCcpOwo/Pg=="));
?>