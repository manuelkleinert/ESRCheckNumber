<?php

class EsrCheckNumber
{
    private $checkList = [0, 9, 4, 6, 8, 2, 7, 1, 3, 5];

    public function getCheckNumber($referenceNumber)
    {
        $transferNumber = 0;
        $referenceNumber = str_replace(' ', '', $referenceNumber);
        foreach(str_split($referenceNumber) as $index => $number) {
            $transferNumber = $this->checkList[($transferNumber + (int)$number) %10];
        }
        return (10 - $transferNumber) %10;
    }
}
