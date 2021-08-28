<?php

# Liskov Substitution Principle 
// If S is a subtype of T then objects of type T may be replaces with objects of type S
// Easy : Subclass methods should behave in the same way as the superclass method
//  Ostrich is a bird, but it can't fly, Ostrich class is a subtype of class Bird, but it shouldn't be able to use the fly method, that means we are breaking the LSP principle


class Bird
{
    public function fly()
    {
    }
}

class Ostrich extends Bird
{
    public function fly()
    {
        // Violation 
    }
}
