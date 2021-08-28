<?php

# Dependency Inversion Principle

// High-level Modules should not depend on low-level modules. Both should depend on abstractions.
// Abstractions should not be depend on details. Details should depend on abstractions.

// The interaction between high level and low level modules should be thought of as an abstract interaction between them -- Robert C Martin

# Wrong Way

class Driver
{
    public $vehicle;

    function __construct()
    {
        $engine = new Engine();
        $this->vehicle = new Vehicle($engine);
    }

    function startVehicle()
    {
        $this->vehicle->start();
    }
}

class Vehicle
{
    public $engine;

    function __construct()
    {
        $this->engine = new Engine();
    }

    function start()
    {
    }
}

class Engine
{
}

# Right Way 

interface VehicleInterface
{
    function start();
}


class Driver
{
    public $vehicle;

    function __construct(VehicleInterface $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    function startVehicle()
    {
        $this->vehicle->start();
    }
}

class Vehicle implements VehicleInterface
{
    function start()
    {
        echo 'vehicle is start!';
    }
}


class Car implements VehicleInterface
{
    function start()
    {
        echo 'Car is start!';
    }
}

$driver = new Driver(new Car);
$driver->startVehicle();
