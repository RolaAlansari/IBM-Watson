# IBM-Watson

## User Interface file:
This code contains a user interface that leads to two pages:
* The first leads to the basic control interface
* The other leads to the arm control interface
It also has a chatbot to talk to the assistant.

## base file:
This file contains a code to control the movement of the base so that the user can enter the user interface page and press the movement button he wants

## arm file:
This file contains the slider range to enter the angle at which the arm is moved
This interface contains five sliders:
* first for the shoulder
* second for the base
* third for elbow
* fourth for wrist
* fifth for gripper

Then it is sent to the database and connected to the server to save these values

## getData file:
This file contains a code to retrieve the last value entered by the user in the database, and it was saved.

## base_move file:
This file contains the database, which contains a table in which the database movement data entered by the user is stored.

## table1 file:
This file contains a database, which contains a table in which the slider range values entered by the user to move the arm are stored

## table_on:
This file contains a database, which contains a table to operate the arm so that the number 1 is stored if the user presses the on the button.
