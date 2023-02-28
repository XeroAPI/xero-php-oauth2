<?php
/**
 * StringUtil
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   Xero API team
 * @link     
 */

namespace XeroAPI\XeroPHP;

class StringUtil
{

    /**
     * Constructor
     */
    public function __construct()
    {

    }

    /**
     * Converts String to Date
     *
     * @param string $data string im MS DateFormat "/Date(321494400000+0000)/"
     *
     * @return $this
     */
    public static function convertStringToDate($data)
    {
        if( self::checkThisDate($data) ) {
            return new \DateTime($data);
        } else {
            // convert Microsoft .NET JSON Date format into native PHP DateTime()
         
            preg_match('/Date\(([-]?\d+)([+,-]?\d*)\)/', $data, $matches);
   
            $dateTime = \DateTime::createFromFormat(
                'U.u',
                sprintf("%d.%06d", $matches[1] / 1000, ($matches[1] % 1000) * 1000)
             );
  
          return $dateTime->setTimezone(new \DateTimeZone($matches[2]));      

        }
    }

    public static function convertStringToDateTime($data)
    {

        if( self::checkThisDate($data) ) {
            return new \DateTime($data);
        } else {
           
            // Data not in a format that simply converts to a new DateTime();
            // Custom Date Deserializer to allow for Xero's use of .NET JSON Date format
            $match = preg_match( '/([\d]{11})/', $data, $date );
            if($match){
                $seconds = $date[1]/1000;
            }
            $match = preg_match( '/([\d]{12})/', $data, $date );
            if($match){
                $seconds = $date[1]/1000;
            }
            $match = preg_match( '/([\d]{13})/', $data, $date );
            if($match){
                $seconds = $date[1]/1000;
            }
            
            $datetime = new \DateTime();
            $datetime->setTimestamp($seconds);
    
            $result = $datetime->format('Y-m-d H:i:s');
                
            $date = new \DateTime($result);
            return $date;
        }
    }

    public static function checkThisDate($value) 
    {
        if (!$value) {
            return false;
        }

        try {
            new \DateTime($value);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}
?>