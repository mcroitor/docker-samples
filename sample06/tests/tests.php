<?php

require_once __DIR__ . '/testframework.php';
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../modules/database.php';
require_once __DIR__ . '/../modules/page.php';

$tests = new TestFramework();

function testDatabaseExists()
{
    global $config;
    return assertExpression(file_exists($config['db']['path']));
}

// test 1: check database connection
function testDbConnection()
{
    global $config;

    try {
        $db = new Database($config['db']['path']);
        return true;
    } catch (Exception $e) {
        return false;
    }
}

// test 2: test count method
function testDbCount()
{
    global $config;
    $count = 0;
    $db = new Database($config['db']['path']);
    $count = $db->Count('page');
    return assertExpression($count == 3);
}

// test 3: test create method
function testDbCreate()
{
    global $config;

    $db = new Database($config['db']['path']);
    $db->Create('page', ['title' => 'Test', 'content' => 'Test']);
    $count = $db->Count('page');
    return assertExpression($count == 4);
}

// test 4: test read method
function testDbRead()
{
    global $config;

    $db = new Database($config['db']['path']);
    $data = $db->Read('page', 1);
    return assertExpression($data[0]['title'] == 'Home');
}

// test 5: test delete method
function testDbDelete()
{
    global $config;

    $db = new Database($config['db']['path']);
    $db->Delete('page', 4);
    $count = $db->Count('page');
    return assertExpression($count == 3);
}

// add tests
$tests->add('Database exists', 'testDatabaseExists');
$tests->add('Database connection', 'testDbConnection');
$tests->add('Database count', 'testDbCount');
$tests->add('Database create', 'testDbCreate');
$tests->add('Database read', 'testDbRead');
$tests->add('Database delete', 'testDbDelete');

// run tests
$tests->run();

echo $tests->getResult();
