<?php
class MyDateTime {

    function MyDateTime()
    {
        // empty constructor
    }
}

class Report {
    var $_dt;
    // more properties ...

    function Report()
    {
        $this->_dt = new MyDateTime();
        // initialization code ...
    }

    // more methods ...
}

$rep = new Report();
echo $rep->Report();
?>