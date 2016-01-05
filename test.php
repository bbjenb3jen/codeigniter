<?
$data =array(
    'Nepal'=>'kathmandu',
    'China'=>'Beiging',
    'Pakistan'=>'Islamabad',
);
foreach($data as $k=>$v)
{
    echo $k.'----'.$v.'<br>';
}
//Now second step

$capital = 'Kathmandu';
$show = 'capital';
echo $$show;
?>