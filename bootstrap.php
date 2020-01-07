<?php
/**
 * Created by PhpStorm.
 * User: ashaddad
 * Date: 15.04.18
 * Time: 11:59
 */
require_once 'classes/formElement/FormElement.php';
require_once 'classes/formElement/InputFormElement.php';
require_once 'classes/formElement/SelectFormElement.php';
require_once 'classes/formElement/InputFormElement.php';
require_once 'classes/network/Network.php';
$net = new Network();
$ipAddress = new InputFormElement('IP Adresse', 'ipAddress', 'text', true);
$CIDRSuffix = new SelectFormElement('CIDR Suffix', 'CIDRSuffix', true);
$InverseNetworkMask = new InputFormElement('Inverse Netzwerkmaske', 'inverseNetworkMask', 'readonly', true);
$numberHosts = new InputFormElement('Anzahl Hosts', 'numberHosts', 'readonly', true);
$networkMask = new InputFormElement('Netzwerkmaske', 'networkMask', 'readonly', true);
$delta = new InputFormElement('Delta', 'delta', 'readonly', true);
$numberSubnet = new InputFormElement('Maximale Anzahl von Subnetzen', 'numberSubnet', 'readonly', true);
$ipFrom = new InputFormElement('Host IP von', 'ipFrom', 'readonly', true);
$ipTo = new InputFormElement('Host IP bis', 'ipTo', 'readonly', true);
$broadcast = new InputFormElement('Broadcast', 'broadcast', 'readonly', true);
$NetworkAddress = new InputFormElement('Netswerk Adresse', 'networkAddress', 'readonly', true);
$send = new InputFormElement('Zurück', 'send', 'submit', true);
$submit = new InputFormElement('rechnen', 'send', 'submit', true);
