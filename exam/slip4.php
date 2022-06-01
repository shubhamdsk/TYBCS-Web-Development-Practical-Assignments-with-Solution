<!-- Write a script to create XML file as
“employee.xml”.The element of this xml file are
as follows.
<empdetails>
<employee>
<empno>--------</empno>
<empname>------</empname>
<salary>---------</salary>
<designation>-------</designation>
</employee>
</empdetails>
Store the details of at least 5 employee.
Write a PHP script to read ”employee.xml” file
contains(empno, empname,
Salary, designation) and print employee details in
tabular format.
(Use Simple XML) -->

<?php

$xml = simplexml_load_file('slip4.xml');

echo '<h2>Employee Details</h2>';

$list = $xml->employee;

for ($i = 0; $i < count($list); $i++) {

    echo 'Emp NO: ' . $list[$i]->empno . '<br>';
    echo 'EMP Name: ' . $list[$i]->empname . '<br>';
    echo 'EMP Salary: ' . $list[$i]->salary . '<br>';
    echo 'EMP Desigantion: ' . $list[$i]->designation . '<br>';
    echo '<br>';

}