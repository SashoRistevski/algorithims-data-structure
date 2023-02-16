<?php
class Node {
public $data;
public $nextNode;
public $prevNode;

function __construct($data) {
$this->data = $data;
$this->nextNode = null;
$this->prevNode = null;
}
}

class DoublyLinkedList {
public $head;

function __construct() {
$this->head = null;
}

function insert($data) {
// Create a new node with the specified data
$newNode = new Node($data);

// If the list is empty, set the new node as the head
if ($this->head === null) {
$this->head = $newNode;
} else {
// Traverse the list to find the last node
$current = $this->head;
while ($current->nextNode !== null) {
$current = $current->nextNode;
}

// Insert the new node after the last node
$current->nextNode = $newNode; // Set the nextNode pointer of the last node to the new node
$newNode->prevNode = $current; // Set the prevNode pointer of the new node to the last node
}
}

function display() {
// Traverse the list and output each node's data
$current = $this->head;
while ($current !== null) {
echo $current->data . " ";
$current = $current->nextNode;
}
}
}
// Create a new doubly linked list
$list = new DoublyLinkedList();

// Insert some nodes into the list
$list->insert("apple");
$list->insert("banana");
$list->insert("cherry");

// Display the data in each node
$list->display(); // Output: "apple banana cherry"

