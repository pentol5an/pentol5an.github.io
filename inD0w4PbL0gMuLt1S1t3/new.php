<?php
/*
*Nama Script: IndoWapBlog Multi Site
*Pembuat: Achunk JealousMan
*Email: achunk17[at]gmail[dot]com
*Situs: http://indowapblog.com
*Facebook: http://www.facebook.com/achunks
*/

eval(base64_decode("DQoNCi8qCipOYW1hIFNjcmlwdDogSW5kb1dhcEJsb2cgTXVsdGkgU2l0ZQoqVmVyc2k6IChMaWhhdCBWRVJTSU9OLnR4dCkKKlBlbWJ1YXQ6IEFjaHVuayBKZWFsb3VzTWFuCipFbWFpbDogYWNodW5rMTdbYXRdZ21haWxbZG90XWNvbQoqU2l0dXM6IGh0dHA6Ly9pbmRvd2FwYmxvZy5jb20KKkZhY2Vib29rOiBodHRwOi8vd3d3LmZhY2Vib29rLmNvbS9hY2h1bmtzCiovCgpkZWZpbmUoJ19JV0JfJywgMSk7DQoKCnJlcXVpcmVfb25jZSgnaW5jL2luZG93YXBibG9nLnBocCcpOw0KJHBhZ2U9JF9HRVRbJ3BhZ2UnXTsKJHRvdGFsPW15c3FsX3Jlc3VsdChteXNxbF9xdWVyeSgic2VsZWN0IGNvdW50KCopIGFzIG51bSBmcm9tIGBibG9nYCB3aGVyZSBgbGlua2AhPSdoYWxsby1kdW5pYScgYW5kIGBkcmFmdGA9JzAnIiksIDApOwppZiAoIWN0eXBlX2RpZ2l0KCRwYWdlKSB8fCBlbXB0eSgkcGFnZSkgfHwgJHBhZ2UgPT0gMCB8fCAkcGFnZSA+IChjZWlsKCR0b3RhbCAvICRzaXRlWydudW1fcG9zdF9tYWluJ10pKSkNCiRwYWdlPScxJzsNCiRwYWdlLS07DQokbWF4X3ZpZXc9JHNpdGVbJ251bV9wb3N0X21haW4nXTsNCiRsaW1pdD0kcGFnZSokbWF4X3ZpZXc7DQokcGFnZSsrOw0KCiRoZWFkX3RpdGxlPSRMQU5HWydsYXRlc3RfcG9zdCddOwpyZXF1aXJlX29uY2UoJ2luYy9oZWFkLnBocCcpOwplY2hvICc8c3R5bGUgdHlwZT0idGV4dC9jc3MiPgojaXBob25lLWxpc3Qge21hcmdpbjogMnB4OyBwYWRkaW5nOiAycHg7fQojaXBob25lLWxpc3QgbGkge2xpc3Qtc3R5bGUtdHlwZTogbm9uZTsgbWFyZ2luOiAycHg7IHBhZGRpbmc6IDJweDt9CiNpcGhvbmUtbGlzdCAuaGVhZGluZyB7bGlzdC1zdHlsZS10eXBlOiBub25lOyBtYXJnaW46IDJweDsgcGFkZGluZzogNnB4IDVweCA2cHggNXB4OyBiYWNrZ3JvdW5kLWNvbG9yOiAjMzMzMzMzOyBjb2xvcjogI0ZGRkZGRjsgZm9udC13ZWlnaHQ6IGJvbGQ7fQojaXBob25lLWxpc3QgbGkgYSB7IGRpc3BsYXk6YmxvY2s7IHBhZGRpbmc6IDZweCA1cHggNnB4IDVweDt9Ci5pcGhvbmUtbGlzdC1ib3JkZXIgbGkgYSB7Ym9yZGVyLXRvcDogMnB4IHNvbGlkICNCNEI0QjQ7fQojaXBob25lLWxpc3QgbGkgYTpob3Zlcgp7YmFja2dyb3VuZC1jb2xvcjogI0UxRTFFMTt9PC9zdHlsZT4nOwoKZWNobyAnPGRpdiBpZD0ibWVzc2FnZSI+JzsKZWNobyAnPC9kaXY+PGRpdiBpZD0iY29udGVudCI+PGRpdiBpZD0ibWFpbi1jb250ZW50Ij48dWwgaWQ9ImlwaG9uZS1saXN0Ij4nOwppZiAoJHRvdGFsID4gMCkKewokcmVxPW15c3FsX3F1ZXJ5KCJzZWxlY3QgYHNpdGVfaWRgLCBgdGl0bGVgLCBgbGlua2AsIGB0aW1lYCBmcm9tIGBibG9nYCB3aGVyZSBgbGlua2AhPSdoYWxsby1kdW5pYScgYW5kIGBkcmFmdGA9ICcwJyBvcmRlciBieSBgdGltZWAgZGVzYyBsaW1pdCAkbGltaXQsJG1heF92aWV3Iik7CndoaWxlICgkcmVzPW15c3FsX2ZldGNoX2FycmF5KCRyZXEpKQp7CiRzaXRlX3Bvc3Q9bXlzcWxfZmV0Y2hfYXJyYXkobXlzcWxfcXVlcnkoIlNFTEVDVCBuYW1lLCB1cmwgRlJPTSBzaXRlIFdIRVJFIGlkPSciLiRyZXNbJ3NpdGVfaWQnXS4iJyIpKTsKZWNobyAnPGxpPjxhIGhyZWY9IicuJHNpdGVfcG9zdFsndXJsJ10uJy8nLiRyZXNbJ2xpbmsnXS4nLnhodG1sIj4nLmh0bWxzcGVjaWFsY2hhcnMoJHJlc1sndGl0bGUnXSkuJyB8ICcuaHRtbHNwZWNpYWxjaGFycygkc2l0ZV9wb3N0WyduYW1lJ10pLicgPGZvbnQgY29sb3I9IiM2NjY2NjYiPicudGltZV9hZ28oJHJlc1sndGltZSddKS4nPC9mb250PjwvYT48L2xpPic7Cn0KfQplbHNlCnsKZWNobyAnPGxpPicuJExBTkdbJ2VtcHR5J10uJzwvbGk+JzsKfQplY2hvICc8L3VsPic7CiRsaW5rPSduZXcucGhwP3BhZ2U9JzsKJHE9Jyc7CnBhZ2luYXRpb24oJHBhZ2UsJG1heF92aWV3LCR0b3RhbCwkbGluaywkcSk7CmVjaG8gJzwvZGl2PjwvZGl2Pic7CnJlcXVpcmVfb25jZSgnaW5jL2Zvb3QucGhwJyk7Cj8+"));
?>