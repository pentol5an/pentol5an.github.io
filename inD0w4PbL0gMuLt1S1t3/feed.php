<?php
/*
*Nama Script: IndoWapBlog Multi Site
*Pembuat: Achunk JealousMan
*Email: achunk17[at]gmail[dot]com
*Situs: http://indowapblog.com
*Facebook: http://www.facebook.com/achunks
*/

eval(base64_decode("DQoKLyoKKk5hbWEgU2NyaXB0OiBJbmRvV2FwQmxvZyBNdWx0aSBTaXRlCipWZXJzaTogKExpaGF0IFZFUlNJT04udHh0KQoqUGVtYnVhdDogQWNodW5rIEplYWxvdXNNYW4KKkVtYWlsOiBhY2h1bmsxN1thdF1nbWFpbFtkb3RdY29tCipTaXR1czogaHR0cDovL2luZG93YXBibG9nLmNvbQoqRmFjZWJvb2s6IGh0dHA6Ly93d3cuZmFjZWJvb2suY29tL2FjaHVua3MKKi8KCmRlZmluZSgnX0lXQl8nLCAxKTsNCiRpd2JfcmVkaXJlY3Rpbmc9J29mZic7CnJlcXVpcmVfb25jZSgnaW5jL2luZG93YXBibG9nLnBocCcpOw0KJGl3Yj1pc3NldCgkX0dFVFsnaXdiJ10pID8gdHJpbSgkX0dFVFsnaXdiJ10pIDogJyc7CnN3aXRjaCAoJGl3YikKewpjYXNlICdyc3NfcG9zdF9jb21tZW50cyc6CiR0PWlzc2V0KCRfR0VUWyd0J10pID8gdHJpbSgkX0dFVFsndCddKSA6ICcnOwokYmxvZz1teXNxbF9mZXRjaF9hcnJheShteXNxbF9xdWVyeSgic2VsZWN0ICogZnJvbSBibG9nIHdoZXJlIHNpdGVfaWQ9JyIuJHNpdGVbJ2lkJ10uIicgYW5kIGxpbms9JyIgLiBteXNxbF9yZWFsX2VzY2FwZV9zdHJpbmcoaHRtbGVudGl0aWVzKCR0KSkgLiAiJyBhbmQgZHJhZnQ9JzAnIikpOwpoZWFkZXIoIkNvbnRlbnQtVHlwZTogYXBwbGljYXRpb24veG1sIik7DQplY2hvICc8P3htbCB2ZXJzaW9uPSIxLjAiIGVuY29kaW5nPSJpc28tODg1OS0xIj8+IDxyc3MgdmVyc2lvbj0iMi4wIg0KeG1sbnM6Y29udGVudD0iaHR0cDovL3B1cmwub3JnL3Jzcy8xLjAvbW9kdWxlcy9jb250ZW50LyIgeG1sbnM6d2Z3PSJodHRwOi8vd2VsbGZvcm1lZHdlYi5vcmcvQ29tbWVudEFQSS8iDQo+PGNoYW5uZWw+DQo8dGl0bGU+S29tZW50YXI6ICcuaHRtbGVudGl0aWVzKHN0cmlwX3RhZ3MoJGJsb2dbJ3RpdGxlJ10pLCBFTlRfUVVPVEVTKS4nPC90aXRsZT4NCjxsaW5rPicuJHNpdGVbJ3VybCddLic8L2xpbms+DQo8ZGVzY3JpcHRpb24+PCFbQ0RBVEFbJy5odG1sZW50aXRpZXMoc3RyaXBfdGFncygkYmxvZ1snZGVzY3JpcHRpb24nXSksIEVOVF9RVU9URVMpLiddXT48L2Rlc2NyaXB0aW9uPjxwdWJEYXRlPicuZGF0ZSgncicsICRibG9nWyd0aW1lJ10pLic8L3B1YkRhdGU+JzsNCiRjb21tZW50PW15c3FsX3F1ZXJ5KCJzZWxlY3QgKiBmcm9tIGNvbW1lbnQgd2hlcmUgc2l0ZV9pZD0nIi4kc2l0ZVsnaWQnXS4iJyBhbmQgYmxvZ19pZD0nIi4kYmxvZ1snaWQnXS4iJyBhbmQgc3RhdHVzPScxJyBvcmRlciBieSB0aW1lIGRlc2MgbGltaXQgMTA7Iik7DQp3aGlsZSAoJGNvbW1lbnRzPW15c3FsX2ZldGNoX2FycmF5KCRjb21tZW50KSkNCnsNCmVjaG8gJzxpdGVtPjx0aXRsZT4nLmh0bWxzcGVjaWFsY2hhcnMoc3RyaXBfdGFncygkY29tbWVudHNbJ25hbWUnXSksIEVOVF9RVU9URVMpLic8L3RpdGxlPjxsaW5rPicuJHNpdGVbJ3VybCddLicvJy4kYmxvZ1snbGluayddLicueGh0bWw8L2xpbms+PHB1YkRhdGU+Jy5kYXRlKCdyJywgJGNvbW1lbnRzWyd0aW1lJ10pLic8L3B1YkRhdGU+JzsKaWYgKCRibG9nWydwcml2YXRlJ10gPT0gMSkKewppZiAoJHVzZXJfaWQpCmVjaG8gJzxkZXNjcmlwdGlvbj48IVtDREFUQVsnLmh0bWxlbnRpdGllcyhzdHJpcF90YWdzKCRjb21tZW50c1sndGV4dCddKSwgRU5UX1FVT1RFUykuJ11dPjwvZGVzY3JpcHRpb24+JzsKZWxzZQplY2hvICc8ZGVzY3JpcHRpb24+PCFbQ0RBVEFbS29tZW50YXIgZGlzZW1idW55aWthbi5dXT48L2Rlc2NyaXB0aW9uPic7Cn0KZWxzZWlmICgkYmxvZ1sncHJpdmF0ZSddID09IDIpCnsKaWYgKCRpc19hdXRob3IpCmVjaG8gJzxkZXNjcmlwdGlvbj48IVtDREFUQVsnLmh0bWxlbnRpdGllcyhzdHJpcF90YWdzKCRjb21tZW50c1sndGV4dCddKSwgRU5UX1FVT1RFUykuJ11dPjwvZGVzY3JpcHRpb24+JzsKZWxzZQplY2hvICc8ZGVzY3JpcHRpb24+PCFbQ0RBVEFbS29tZW50YXIgZGlzZW1idW55aWthbi5dXT48L2Rlc2NyaXB0aW9uPic7Cn0KZWxzZQp7CmVjaG8gJzxkZXNjcmlwdGlvbj48IVtDREFUQVsnLmh0bWxlbnRpdGllcyhzdHJpcF90YWdzKCRjb21tZW50c1sndGV4dCddKSwgRU5UX1FVT1RFUykuJ11dPjwvZGVzY3JpcHRpb24+JzsKfQplY2hvICc8L2l0ZW0+JzsNCn0NCmVjaG8gJzwvY2hhbm5lbD48L3Jzcz4nOwoKYnJlYWs7CmNhc2UgJ3Jzc19uZXdfY29tbWVudHMnOgpoZWFkZXIoIkNvbnRlbnQtVHlwZTogYXBwbGljYXRpb24veG1sIik7DQplY2hvICc8P3htbCB2ZXJzaW9uPSIxLjAiIGVuY29kaW5nPSJpc28tODg1OS0xIj8+IDxyc3MgdmVyc2lvbj0iMi4wIg0KeG1sbnM6Y29udGVudD0iaHR0cDovL3B1cmwub3JnL3Jzcy8xLjAvbW9kdWxlcy9jb250ZW50LyIgeG1sbnM6d2Z3PSJodHRwOi8vd2VsbGZvcm1lZHdlYi5vcmcvQ29tbWVudEFQSS8iDQo+PGNoYW5uZWw+DQo8dGl0bGU+S29tZW50YXIgJy5odG1sZW50aXRpZXMoc3RyaXBfdGFncygkc2l0ZVsnbmFtZSddKSwgRU5UX1FVT1RFUykuJzwvdGl0bGU+DQo8bGluaz4nLiRzaXRlWyd1cmwnXS4nPC9saW5rPg0KPGRlc2NyaXB0aW9uPjwhW0NEQVRBWycuaHRtbGVudGl0aWVzKHN0cmlwX3RhZ3MoJHNpdGVbJ2Rlc2NyaXB0aW9uJ10pLCBFTlRfUVVPVEVTKS4nXV0+PC9kZXNjcmlwdGlvbj48cHViRGF0ZT4nLmRhdGUoJ3InLCB0aW1lKCkpLic8L3B1YkRhdGU+JzsNCiRjb21tZW50PW15c3FsX3F1ZXJ5KCJzZWxlY3QgKiBmcm9tIGNvbW1lbnQgd2hlcmUgc2l0ZV9pZD0nIi4kc2l0ZVsnaWQnXS4iJyBhbmQgc3RhdHVzPScxJyBvcmRlciBieSB0aW1lIGRlc2MgbGltaXQgMTA7Iik7DQp3aGlsZSAoJGNvbW1lbnRzPW15c3FsX2ZldGNoX2FycmF5KCRjb21tZW50KSkNCnsNJGJsb2dzPW15c3FsX2ZldGNoX2FycmF5KG15c3FsX3F1ZXJ5KCJzZWxlY3QgKiBmcm9tIGJsb2cgd2hlcmUgaWQ9JyIuJGNvbW1lbnRzWydibG9nX2lkJ10uIiciKSk7CmVjaG8gJzxpdGVtPjx0aXRsZT5CeTogJy5odG1sc3BlY2lhbGNoYXJzKHN0cmlwX3RhZ3MoJGNvbW1lbnRzWyduYW1lJ10pLCBFTlRfUVVPVEVTKS4nPC90aXRsZT48bGluaz4nLiRzaXRlWyd1cmwnXS4nLycuJGJsb2dzWydsaW5rJ10uJy54aHRtbCNjb21tZW50czwvbGluaz48cHViRGF0ZT4nLmRhdGUoJ3InLCAkY29tbWVudHNbJ3RpbWUnXSkuJzwvcHViRGF0ZT4nOwppZiAoJGJsb2dbJ3ByaXZhdGUnXSA9PSAxKQp7CmlmICgkdXNlcl9pZCkKZWNobyAnPGRlc2NyaXB0aW9uPjwhW0NEQVRBWycuaHRtbGVudGl0aWVzKHN0cmlwX3RhZ3MoJGNvbW1lbnRzWyd0ZXh0J10pLCBFTlRfUVVPVEVTKS4nXV0+PC9kZXNjcmlwdGlvbj4nOwplbHNlCmVjaG8gJzxkZXNjcmlwdGlvbj48IVtDREFUQVtLb21lbnRhciBkaXNlbWJ1bnlpa2FuLl1dPjwvZGVzY3JpcHRpb24+JzsKfQplbHNlaWYgKCRibG9nWydwcml2YXRlJ10gPT0gMikKewppZiAoJGlzX2F1dGhvcikKZWNobyAnPGRlc2NyaXB0aW9uPjwhW0NEQVRBWycuaHRtbGVudGl0aWVzKHN0cmlwX3RhZ3MoJGNvbW1lbnRzWyd0ZXh0J10pLCBFTlRfUVVPVEVTKS4nXV0+PC9kZXNjcmlwdGlvbj4nOwplbHNlCmVjaG8gJzxkZXNjcmlwdGlvbj48IVtDREFUQVtLb21lbnRhciBkaXNlbWJ1bnlpa2FuLl1dPjwvZGVzY3JpcHRpb24+JzsKfQplbHNlCnsKZWNobyAnPGRlc2NyaXB0aW9uPjwhW0NEQVRBWycuaHRtbGVudGl0aWVzKHN0cmlwX3RhZ3MoJGNvbW1lbnRzWyd0ZXh0J10pLCBFTlRfUVVPVEVTKS4nXV0+PC9kZXNjcmlwdGlvbj4nOwp9CgplY2hvICc8L2l0ZW0+JzsNCn0NCmVjaG8gJzwvY2hhbm5lbD48L3Jzcz4nOwpicmVhazsKY2FzZSAncnNzX25ld19wb3N0cyc6CmRlZmF1bHQ6CmhlYWRlcigiQ29udGVudC1UeXBlOiBhcHBsaWNhdGlvbi94bWwiKTsNCmVjaG8gJzw/eG1sIHZlcnNpb249IjEuMCIgZW5jb2Rpbmc9Imlzby04ODU5LTEiPz4gPHJzcyB2ZXJzaW9uPSIyLjAiDQp4bWxuczpjb250ZW50PSJodHRwOi8vcHVybC5vcmcvcnNzLzEuMC9tb2R1bGVzL2NvbnRlbnQvIiB4bWxuczp3Znc9Imh0dHA6Ly93ZWxsZm9ybWVkd2ViLm9yZy9Db21tZW50QVBJLyINCj48Y2hhbm5lbD4NCjx0aXRsZT4nLmh0bWxlbnRpdGllcyhzdHJpcF90YWdzKCRzaXRlWyduYW1lJ10pLCBFTlRfUVVPVEVTKS4nPC90aXRsZT4NCjxsaW5rPicuJHNpdGVbJ3VybCddLic8L2xpbms+DQo8ZGVzY3JpcHRpb24+PCFbQ0RBVEFbJy5odG1sZW50aXRpZXMoc3RyaXBfdGFncygkc2l0ZVsnZGVzY3JpcHRpb24nXSksIEVOVF9RVU9URVMpLiddXT48L2Rlc2NyaXB0aW9uPjxwdWJEYXRlPicuZGF0ZSgncicsIHRpbWUoKSkuJzwvcHViRGF0ZT4nOw0KJGJsb2c9bXlzcWxfcXVlcnkoInNlbGVjdCAqIGZyb20gYmxvZyB3aGVyZSBzaXRlX2lkPSciLiRzaXRlWydpZCddLiInIGFuZCBkcmFmdD0nMCcgb3JkZXIgYnkgdGltZSBkZXNjIGxpbWl0IDEwOyIpOw0Kd2hpbGUgKCRibG9ncz1teXNxbF9mZXRjaF9hcnJheSgkYmxvZykpDQp7DQplY2hvICc8aXRlbT48dGl0bGU+Jy5odG1sc3BlY2lhbGNoYXJzKHN0cmlwX3RhZ3MoJGJsb2dzWyd0aXRsZSddKSwgRU5UX1FVT1RFUykuJzwvdGl0bGU+PGxpbms+Jy4kc2l0ZVsndXJsJ10uJy8nLiRibG9nc1snbGluayddLicueGh0bWw8L2xpbms+PHB1YkRhdGU+Jy5kYXRlKCdyJywgJGJsb2dzWyd0aW1lJ10pLic8L3B1YkRhdGU+JzsKCmlmICgkYmxvZ3NbJ3ByaXZhdGUnXSA9PSAxKQp7CmlmICgkdXNlcl9pZCkKZWNobyAnPGRlc2NyaXB0aW9uPjwhW0NEQVRBWycuaHRtbF9lbnRpdHlfZGVjb2RlKGh0bWxlbnRpdGllcygkYmxvZ3NbJ2Rlc2NyaXB0aW9uJ10pKS4nXV0+PC9kZXNjcmlwdGlvbj4nOwplbHNlCmVjaG8gJzxkZXNjcmlwdGlvbj48IVtDREFUQVtQb3N0aW5nYW4gaW5pIGhhbnlhIHVudHVrIE1lbWJlciA8Yj4nLmh0bWxzcGVjaWFsY2hhcnMoJHNpdGVbJ25hbWUnXSkuJzwvYj4uIFVudHVrIG1lbGloYXQgcG9zdGluZ2FuIGluaSBzaWxha2FuIGxvZ2luIGF0YXUgcmVnaXN0ZXIgdGVybGViaWggZGFodWx1Ll1dPjwvZGVzY3JpcHRpb24+JzsKfQplbHNlaWYgKCRibG9nc1sncHJpdmF0ZSddID09IDIpCnsKaWYgKCRpc19hdXRob3IpCmVjaG8gJzxkZXNjcmlwdGlvbj48IVtDREFUQVsnLmh0bWxfZW50aXR5X2RlY29kZShodG1sZW50aXRpZXMoJGJsb2dzWydkZXNjcmlwdGlvbiddKSkuJ11dPjwvZGVzY3JpcHRpb24+JzsKZWxzZQplY2hvICc8ZGVzY3JpcHRpb24+PCFbQ0RBVEFbUG9zdGluZ2FuIGluaSBoYW55YSB1bnR1ayBQZW51bGlzIChBdXRob3IpIDxiPicuaHRtbHNwZWNpYWxjaGFycygkc2l0ZVsnbmFtZSddKS4nPC9iPi5dXT48L2Rlc2NyaXB0aW9uPic7Cn0KZWxzZQp7CmVjaG8gJzxkZXNjcmlwdGlvbj48IVtDREFUQVsnLmh0bWxfZW50aXR5X2RlY29kZShodG1sZW50aXRpZXMoJGJsb2dzWydkZXNjcmlwdGlvbiddKSkuJ11dPjwvZGVzY3JpcHRpb24+JzsKfQplY2hvICc8L2l0ZW0+JzsNCn0NCmVjaG8gJzwvY2hhbm5lbD48L3Jzcz4nOwp9Cm15c3FsX2Nsb3NlKCRpd2JfY29ubmVjdCk7Cj8+"));
?>