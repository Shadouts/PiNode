# PiNode
Bitcoin block explorer implementation for an indexed Raspberry Pi full node.

##Requirements
* Raspbian Jessie
* A fully indexed bitcoin block chain (txindex=1).
* sudo apt-get install php5-curl

##Installation
* Copy site files to site root directory.
* Change the JSON-RPC connection variables in rpcRequest.php.
* The application utilizes clean URLs. As such, this requires ModRewite to be enabled. Rewrite rules have been provided as an .htaccess file, however, it is more efficient to add these rules to the server configuration. Add the .htaccess file to each directory or add the rules to the VirtualHost configuration.
* sudo service apache2 restart
 
##Feedback
Please [open an issue](https://github.com/Shadouts/PiNode/issues/new) if you discover any bugs.

##Donations
Please donate to 14o6Z9U32f2dXv6x5PCvHQaWY1jkQepDZQ if you find this helpful. More features to be added.
