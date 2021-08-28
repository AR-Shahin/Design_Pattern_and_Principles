<?php

# Interface Segregation Principle
// Interface == Contract
// Segregation == Divide or Separate 
// No client should be forced to depends on methods it doesn't use

# Wrong Way

interface File
{
    function parse();
    function htmlContent();
}
class JsonFile implements File
{
    function parse()
    {
    }
    function htmlContent()
    {
    }
}


# right way 

interface File
{
    function parse();
}
interface Html
{
    function htmlContent();
}
class JsonFile implements File
{
    function parse()
    {
    }
}
class HtmlFile implements Html
{
    function htmlContent()
    {
    }
}
