# PiNode
Bitcoin block explorer implementation for an indexed Raspberry Pi full node.

##Requirements
* Raspbian Jessie
* A fully indexed bitcoin block chain (txindex=1).
* sudo apt-get install php5-curl

##Installation
* Copy site files to site root directory.
* Change the JSON-RPC connection variables in rpcRequest.php.
* The application utilizes clean URLs. As such, this requires ModRewite to be enabled. Add to configuration:
  * RewriteEngine On
  * RewriteRule ^/([A-Za-z]+)$  /page/$1.html  [NC,L]
* sudo service apache2 restart
 
##Feedback
Please [open an issue](https://github.com/Shadouts/PiNode/issues/new) if you discover any bugs.

##Donations
Please donate to 14o6Z9U32f2dXv6x5PCvHQaWY1jkQepDZQ if you find this helpful. More features to be added.
