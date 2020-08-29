# About Knockt

Knockt is an API that simulates the processes of vending machine management.

This purely exists to demonstrate the features of Laravel out of the box and to be used as a teaching tool for members of my working team.

-   Vending Machines
-   Machine Rows
-   Row Slots
-   Slot Product
-   Product Stock

### Vending Machines

-   Has many Rows
-   Has an Active State

### Rows

-   Belongs to a Machine
-   Has many Slots

### Slots

-   Belongs to a Row
-   Has a Product

### Product

-   Belongs to many Slots
-   Contains a running stock amount
