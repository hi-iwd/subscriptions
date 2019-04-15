<?php

namespace IWD\BluePaySubs\Helper;

class Log extends \Magento\Framework\App\Helper\AbstractHelper
{
    protected $log;

    public function __construct(
        \IWD\BluePaySubs\Model\ResourceModel\Log\Collection $log
    )
    {
        $this->log = $log;
    }

    public function getTransaction($transactionID){        
        $log = clone $this->log;
        $log->addFieldToFilter('transaction_id', array('eq' => $transactionID));		
        if(count($log) == 0){
            return 1;
        }else{
            return 0;
        }
    }
}

?>