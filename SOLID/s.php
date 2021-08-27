<?php

// A class should have one and only one responsibility
// A class should be responsible for a single task


# Violation

class User
{
    public function info()
    {
        # code...
    }

    public function sendEmail()
    {
        # code...
    }
}


# Right Way


class User
{
    public function info()
    {
        # code...
    }
}

class EmailSender
{
    public function sendEmail()
    {
        # code...
    }
}
