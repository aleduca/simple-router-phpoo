<?php $this->layout('master', ['title' => 'Contact']) ?>

<h1>Contact</h1>

<form action="/contact" method="post">
    <input type="text" name="subject">
    <input type="text" name="email">

    <button type="submit">Save</button>
</form>