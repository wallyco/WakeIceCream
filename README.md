# Group1 - Wake Ice Cream
Repository created for Wake Tech CSC289 Programming Capstone course

__Formatted using Markdown__
- https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet

## Wake Ice Cream Application Overview
- This project will create software for the Ice Cream Shop to track inventory of ice cream flavors and toppings to reduce labor cost and increase profit.
- Admin will be able to access the inventory system to check in items when replenishing inventory. Admin will also be able to make manual changes when running an audit on inventory to ensure digital inventory matches physical inventory.
- Software will also have the ability to be used as a POS (Point of Sale) System in which regular users can create transactions between users and customers.
- The software will also act as a portal in which employees can clock in and out and track hours worked.
- Admin will also have the ability to access inventory, sales, work hours, and expenses remotely via browser.



## Group Members / Roles
- Joshua Pierce: japierce3@my.waketech.edu
- Ian Steed: iesteed@my.waketech.edu
- Quyen Hoang: qvhoang@my.waketech.edu
- Victoria Cross: vhcross@my.waketech.edu
- Joah Chambers: jnchambers@my.waketech.edu
- Riya Vadadoria: ravadadoria@my.waketech.edu

#### __Industry Mentor__: Rick Swartwood
#### __Instructor__: Susan Rizzo


## Development Environment Setup
__PRE-REQS__:
- VS Code
    - URL: https://code.visualstudio.com/download
    - __Plus__ Install the Dev Containers extension 

- Docker Desktop
    - URL: https://www.docker.com/products/docker-desktop/

### __Setup Steps (via Command window)__

1. Clone repository to local directory
2. CD to WakeIceCream 
3. docker compose up

__IMPORTANT:__ If you get the following error ... _Error response from daemon: Ports are not available: exposing port TCP 0.0.0.0:80 -> 0.0.0.0:0: listen tcp 0.0.0.0:80: bind: An attempt was made to access a socket in a way forbidden by its access permissions._

In VS Code, edit file __docker-compose.yml__ 

- Change apache-php-environment to use a port other than 80 (first value). For example:

    ports:
      - 8088:80


## SOFTWARE/TOOLS/TUTORIALS/ETC.
- VS Code
    - URL: https://code.visualstudio.com/download
    - Dev Containers extension
- Docker Desktop
    - URL: https://www.docker.com/products/docker-desktop/
- Python v3.11.2
    - https://www.python.org/downloads/
- git
    - https://git-scm.com/downloads
- GitHub
    - https://github.com/wallyco/WakeIceCream
- FastAPI w/Uvicorn server & Starlette 
    - https://fastapi.tiangolo.com/

## IMAGES DOWNLOADED
- Downloaded images from ... 
