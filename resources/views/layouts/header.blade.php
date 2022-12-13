<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>To Do List</title>
  {{-- <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}"> --}}
</head>
<style>
  html {
    background-color: #E4E9FD;
    background-image: -webkit-linear-gradient(65deg, tan 50%, #E4E9FD 50%);
    min-height: 1000px;
    font-family: 'helvetica neue';
  }
  
  h1 {
    color: #fff;
    padding: 10px;
  }
  
  .box {
    max-width: 400px;
    margin: 50px auto;
    background: white;
    border-radius: 5px;
    box-shadow: 5px 5px 15px -5px rgba(0, 0, 0, 0.3);
  }
  
  #heading {
    background-color: tan;
    text-align: center;
  }
  
  .item {
    min-height: 70px;
    display: flex;
    align-items: center;
    border-bottom: 1px solid #F1F1F1;
  }
  
  .item:last-child {
    border-bottom: 0;
  }
  
  input:checked+p {
    text-decoration: line-through;
    text-decoration-color: tan;
  }
  
  input[type="checkbox"] {
    margin: 20px;
  }
  
  p {
    margin: 0;
    padding: 20px;
    font-size: 20px;
    font-weight: 200;
    color: #00204a;
  }
  
  form {
    text-align: center;
    margin-left: 20px;
  }
  
  button {
    min-height: 50px;
    width: 50px;
    border-radius: 50%;
    border-color: transparent;
    background-color: tan;
    color: #fff;
    font-size: 30px;
    padding-bottom: 6px;
    border-width: 0;
  }
  
  input[type="text"] {
    text-align: center;
    height: 60px;
    top: 10px;
    border: none;
    background: transparent;
    font-size: 20px;
    font-weight: 200;
    width: 313px;
  }
  
  input[type="text"]:focus {
    outline: none;
    box-shadow: inset 0 -3px 0 0 tan;
  }
  
  ::placeholder {
    color: grey;
    opacity: 1;
  }
  
  footer {
    color: white;
    color: rgba(0, 0, 0, 0.5);
    text-align: center;
  }
  
</style>
