<?php
/**
 * Created by PhpStorm.
 * User: ashaddad
 * Date: 13.04.18
 * Time: 13:44
 */
require_once 'bootstrap.php';
if (empty($_POST['ipAddress']) || count(explode('.', $_POST['ipAddress'])) != 4 || empty($_POST['CIDRSuffix'])) {
    header('location: index.php');
}
?>
<html>
    <link rel="stylesheet" href="network.css">
    <body>
        <form method="post" action="index.php" class="boxCIDR">
           <h1>CIDR Rechner</h1>
                <table>
                    <tr>
                    <?php
                    if (!empty($_POST['ipAddress']) && !empty($_POST['CIDRSuffix'])) {
                        print $ipAddress->render();
                        $net->setIpAddress($_POST['ipAddress']);
                        $net->setCIDRSuffix($_POST['CIDRSuffix']);
                        $className = $net->checkIpFromWhichClass($net->convertIpToBinary8Bit($net->getIpAddress()));
                        print '<br>' . $className;
                        $net->setNetworkMask($net->getCIDRSuffix());
                        $networkMask->setValue($net->getNetworkMask());
                        print '<td>' . $networkMask->render() . '</td></tr>';
                        $net->setInverseNetworkMask($net->wcMask());
                        $InverseNetworkMask->setValue($net->getInverseNetworkMask());
                        print '<td>' . $InverseNetworkMask->render() . '</td>';
                        $net->setNetworkAddress($net->networkAddress());
                        $NetworkAddress->setValue($net->getNetworkAddress());
                        print '<td>' . $NetworkAddress->render() . '</td>';
                        $net->setNumberHosts($net->numberOfHosts());
                        $numberHosts->setValue($net->getNumberHosts());
                        print '<td>' . $numberHosts->render() . '</td></tr>';
                        $net->setNumberOfSubnet($net->numberOFNets());
                        $numberSubnet->setValue($net->getNumberOfSubnet());
                        print '<td>' . $numberSubnet->render() . '</td></tr>';
                        $net->setDeltaBetweenTheSubnet($net->deltaBetweenSubnet());
                        $delta->setValue($net->getDeltaBetweenTheSubnet());
                        print '<td>' . $delta->render() . '</td></tr>';
                        $net->setBroadcast($net->broadcast());
                        $broadcast->setValue($net->getBroadcast());
                        print '<td>' . $broadcast->render() . '</td></tr>';
                        $net->setIpFrom($net->ipFrom());
                        $ipFrom->setValue($net->getIpFrom());
                        print '<td>' . $ipFrom->render() . '</td></tr>';
                        $net->setIpTO($net->ipTo());
                        $ipTo->setValue($net->getIpTo());
                        print '<td>' . $ipTo->render() . '</td></tr>';
                        print '<td>' . $send->render() . '</td></tr>';
                    }
                ?>
            </table>
        </form>
    </body>
</html>
