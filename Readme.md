# Object-Oriented Principles in PHP

This project demonstrates the use of object-oriented principles in PHP, featuring a `Team` class and a `Member` class.

## Table of Contents

- [Introduction](#introduction)
- [Classes](#classes)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Introduction

This project showcases object-oriented programming principles in PHP, providing implementations of the `Team` and `Member` classes. It illustrates concepts like constructors, static methods, encapsulation, and method abstraction.

## Run a local PHP server in the "constructs" directory:

php -S localhost:8888 -t constructs

## Classes

## GitHub Repository

The project is hosted on GitHub. You can find the repository [here](https://github.com/victor90braz/03-inheritance.git).

### Team Class

The `Team` class represents a sports team and includes the following methods:

- `__construct($name, $members)`: Constructor to initialize the team with a name and an array of members.
- `start(...$params)`: Static factory method to create a new `Team` instance.
- `name()`: Get the name of the team.
- `add($name)`: Add a new member to the team.
- `members()`: Get the array of team members.

### Member Class

The `Member` class represents an individual team member and includes the following methods:

- `__construct($name)`: Constructor to initialize a member with a name.
- `lastViewed()`: Method to get the last viewed information for the member.

## Features

- Implementation of the `Team` class with methods for managing team information.
- Implementation of the `Member` class for representing individual members of the team.

## Installation

1. Clone the repository or download the ZIP file.
2. Install any necessary dependencies using the provided `composer.json` file:
   ```bash
   composer install
   ```
