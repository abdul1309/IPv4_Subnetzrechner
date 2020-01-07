<?php

/**
 * Created by PhpStorm.
 * User: ashaddad
 * Date: 11.04.18
 * Time: 19:21
 */
class Network
{
    private $_ipAddress;
    private $_cidrSuffix;
    private $_networkMask;
    private $_inverseNetworkMask;
    private $_networkAddress;
    private $_numberHosts;
    private $_numberOfSubnet;
    private $_deltaBetweenTheSubnet;
    private $_ipFrom;
    private $_ipTO;
    private $_broadcast;
    /**
     * Set the values from the Form to the ip address.
     *
     * @param string $value the value of ip address.
     *
     * @return set the value.
     */
    public function setIpAddress($value)
    {
        $this->_ipAddress = $value;
    }
    /**
     * Get the ip address´s value.
     *
     * @return the ip address´s value.
     */
    public function getIpAddress()
    {
        return $this->_ipAddress;
    }
    /**
     * Set the values from the Form to the CIDRSuffix.
     *
     * @param string $value the value of CIDRSuffix.
     *
     * @return set the value.
     */
    public function setCIDRSuffix($value)
    {
        $this->_cidrSuffix = $value;
    }
    /**
     * Get the ip CidrSuffix´s value.
     *
     * @return string
     */
    public function getCIDRSuffix()
    {
        return $this->_cidrSuffix;
    }
    /**
     * Set the values from the Form to the network mask.
     *
     * @param string $value the value of network mask.
     *
     * @return set the value.
     */
    public function setNetworkMask($value)
    {
        $this->_networkMask = $value;
    }
    /**
     * Get the network mask´s value.
     *
     * @return string
     */
    public function getNetworkMask()
    {
        return $this->_networkMask;
    }
    /**
     * Set the values from the Form to the inverse network mask.
     *
     * @param string $value the value of inverse network mas.
     *
     * @return set the value.
     */
    public function setInverseNetworkMask($value)
    {
        $this->_inverseNetworkMask = $value;
    }
    /**
     * Get the inverse network mask´s value.
     *
     * @return string.
     */
    public function getInverseNetworkMask()
    {
        return $this->_inverseNetworkMask;
    }
    /**
     * Set the values from the Form to the ip to.
     *
     * @param string $value the value of ip to.
     *
     * @return set the value.
     */
    public function setNetworkAddress($value)
    {
        $this->_networkAddress = $value;
    }
    /**
     * Get the network address.
     *
     * @return string.
     */
    public function getNetworkAddress()
    {
        return $this->_networkAddress;
    }
    /**
     * Set the values from the Form to the Number Hosts.
     *
     * @param string $value the value of Number Hosts.
     *
     * @return set the value.
     */
    public function setNumberHosts($value)
    {
        $this->_numberHosts = $value;
    }
    /**
     * Get the value of the Number Hosts.
     *
     * @return integer.
     */
    public function getNumberHosts()
    {
        return $this->_numberHosts;
    }
    /**
     * Set the values from the Form to Number subnet.
     *
     * @param string $value the value of  Number subnet.
     *
     * @return set the value.
     */
    public function setNumberOfSubnet($value)
    {
        $this->_numberOfSubnet = $value;
    }
    /**
     * Get the  Number subnet´s value.
     *
     * @return integer.
     */
    public function getNumberOfSubnet()
    {
        return $this->_numberOfSubnet;
    }
    /**
     * Set the values from the Form to the Delta between the Subnet.
     *
     * @param string $value the value of the Delta between the Subnet.
     *
     * @return set the value.
     */
    public function setDeltaBetweenTheSubnet($value)
    {
        $this->_deltaBetweenTheSubnet = $value;
    }
    /**
     * Get the the Delta between the Subnet´s value.
     *
     * @return the the Delta between the Subnet´s value.
     */
    public function getDeltaBetweenTheSubnet()
    {
        return $this->_deltaBetweenTheSubnet;
    }
    /**
     * Set the values from the Form to the ip from.
     *
     * @param string $value the value of ip from.
     *
     * @return set the value.
     */
    public function setIpFrom($value)
    {
        $this->_ipFrom = $value;
    }
    /**
     * Get the ip from´s value.
     *
     * @return string.
     */
    public function getIpFrom()
    {
        return $this->_ipFrom;
    }
    /**
     * Set the values from the Form to the ip to.
     *
     * @param string $value the value of ip to.
     *
     * @return set the value.
     */
    public function setIpTO($value)
    {
        $this->_ipTO = $value;
    }
    /**
     * Get the ip to´s value.
     *
     * @return string.
     */
    public function getIpTo()
    {
        return $this->_ipTO;
    }
    /**
     * Set the values from the Form to the broadcast.
     *
     * @param string $value the value of the broadcast.
     *
     * @return set the value.
     */
    public function setBroadcast($value)
    {
        $this->_broadcast = $value;
    }
    /**
     * Get the the broadcast´s value.
     *
     * @return string.
     */
    public function getBroadcast()
    {
        return $this->_broadcast;
    }
    /**
     * Convert to Binary 8bit
     *
     * @param string $value the value of the  ip address
     *
     * @return string
     */
    public function convertIpToBinary8Bit($value)
    {
        $parts = explode('.', $value);
        for ($i = 0; $i < 4; $i++) {
            $parts[$i] = decbin(($parts[$i]));
        }
        $ipAddress = sprintf("%08d", $parts[0]).'.'.sprintf("%08d", $parts[1]).'.'.sprintf("%08d", $parts[2]).'.'.sprintf("%08d", $parts[3]);
        return $ipAddress;
    }
    /**
     * Convert From Binary to Decimal
     *
     * @param string $value the value of the  ip address
     *
     * @return string the value to binary
     */
    public function convertFromBinaryToDecimal($value)
    {
        $parts = explode('.', $value);
        for ($i = 0; $i < 4; $i++) {
            $parts[$i] = bindec(($parts[$i]));
        }
        return $parts[0].'.'.$parts[1].'.'.$parts[2].'.'.$parts['3'];
    }
    /**
     * Check the IP from which class
     *
     * @param string $value the value of the  ip address
     *
     * @return string
     */
    public function checkIpFromWhichClass($value)
    {
        if (substr($value, 0, 1)==0) {
            return 'Class A';
        } elseif (substr($value, 0, 2)==10) {
            return 'Class B';
        } elseif (substr($value, 0, 3)==110) {
            return 'Class C';
        }
    }
    /**
     * Network addresse
     *
     * @return string
     */
    public function networkAddress()
    {
        $subnet = long2ip(ip2long($this->_ipAddress) & ip2long($this->_networkMask));
        return $subnet;
    }
    /**
     * The Broadcast
     *
     * @return string
     */
    public function broadcast()
    {
        $bcast =long2ip(ip2long($this->_ipAddress) | ip2long($this->_inverseNetworkMask));
        return $bcast;
    }
    /**
     * The Inverse Network Mask
     *
     * @return string
     */
    public function wcMask()
    {
        $wcMask=long2ip(~ip2long($this->_cidrSuffix));
        return $wcMask;
    }
    /**
     * IP From
     *
     * @return string
     */
    public function ipFrom()
    {
        $parts = explode('.', $this->_networkAddress);
        $ipFrom = $parts[0].'.'.$parts[1].'.'.$parts[2].'.'.($parts[3]+1);
        return $ipFrom;
    }
    /**
     * IP TO
     *
     * @return string
     */
    public function ipTo()
    {
        $parts = explode('.', $this->_broadcast);
        $ipTo = $parts[0].'.'.$parts[1].'.'.$parts[2].'.'.($parts[3]-1);
        return $ipTo;
    }
    /**
     * Number oh Hosts
     *
     * @return string
     */
    public function numberOfHosts()
    {
        $partsToBinay = explode('.', $this->convertIpToBinary8Bit($this->_networkMask));
        $value0= null;
        $value1 = null;
        $valueZero = 0;
        if ($this->checkIpFromWhichClass($this->convertIpToBinary8Bit($this->_ipAddress)) == "Class A") {
            for ($i = 0; $i < 4; $i++) {
                $value0[$i] = substr_count($partsToBinay[$i], 0);
            }
            foreach ($value0 as $item) {
                $valueZero += $item;
            }
        } elseif ($this->checkIpFromWhichClass($this->convertIpToBinary8Bit($this->_ipAddress))  == "Class B") {
            for ($i = 2; $i < 4; $i++) {
                $value0[$i] = substr_count($partsToBinay[$i], 0);
            }
            foreach ($value0 as $item) {
                $valueZero += $item;
            }
        } else {
            for ($i = 3; $i < 4; $i++) {
                $valueZero = substr_count($partsToBinay[$i], 0);
            }
        }
        return (pow(2, $valueZero)-2);
    }
    /**
     * Number of nets
     *
     * @return number
     */
    public function numberOFNets()
    {
        $partsToBinay = explode('.', $this->convertIpToBinary8Bit($this->_networkMask));
        $value1 = null;
        $valueOne = null;
        if ($this->checkIpFromWhichClass($this->convertIpToBinary8Bit($this->_ipAddress))== "Class A") {
            for ($i = 1; $i < 4; $i++) {
                $value1[$i] = substr_count($partsToBinay[$i], 1);
                foreach ($value1 as $item) {
                    $valueOne += $item;
                }
            }
        } elseif ($this->checkIpFromWhichClass($this->convertIpToBinary8Bit($this->_ipAddress))  == "Class B") {
            for ($i = 2; $i < 4; $i++) {
                $value1[$i] = substr_count($partsToBinay[$i], 1);
            }
            foreach ($value1 as $item) {
                $valueOne += $item;
            }
        } else {
            for ($i = 3; $i < 4; $i++) {
                 $valueOne = substr_count($partsToBinay[$i], 1);
            }
        }
        return pow(2, $valueOne);
    }
    /**
     * Delta between the subnets
     *
     * @return number
     */
    public function deltaBetweenSubnet()
    {
        $parts = explode('.', $this->_networkMask);
        $value_delta = null;
        if ($this->checkIpFromWhichClass($this->convertIpToBinary8Bit($this->_ipAddress)) == "Class A") {
            $value_delta = $parts[1];
        } elseif ($this->checkIpFromWhichClass($this->convertIpToBinary8Bit($this->_ipAddress))  == "Class B") {
            $value_delta = $parts[2];
        } else {
            $value_delta = $parts[3];
        }
        return (255 - $value_delta);
    }
}