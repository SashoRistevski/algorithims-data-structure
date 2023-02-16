<?php

// Node class represents a single node in the linked list
class Node {
    public $data; // stores the data in the node
    public $nextNode; // stores a reference to the next node in the list

    // constructor initializes the node with the given data and sets nextNode to null
    function __construct($data) {
        $this->data = $data;
        $this->nextNode = null;
    }
}

// LinkedList class represents the linked list as a whole
class LinkedList {
    public $head; // stores a reference to the first node in the list

    // constructor initializes the list with an empty head
    function __construct() {
        $this->head = null;
    }

    // insert a new node with the given data at the end of the list
    function insert($data, $previousNodeData = null) {
        // Create a new node with the specified data
        $newNode = new Node($data);

        // If the linked list is empty, set the new node as the head
        if ($this->head === null) {
            $this->head = $newNode;
        } else {
            // Traverse the linked list to find the node with the specified data
            $current = $this->head;
            while ($current !== null && $current->data !== $previousNodeData) {
                $current = $current->nextNode;
            }

            // If the node with the specified data is found, insert the new node after it
            if ($current !== null) {
                $newNode->nextNode = $current->nextNode; // Set the next pointer of the new node to the node that follows the current node
                $current->nextNode = $newNode; // Set the next pointer of the current node to the new node
            }
        }
    }
    // display the data of each node in the list
    function display() {
        $current = $this->head; // start at the head of the list
        while ($current != null) { // iterate through the list until we reach the end
            echo $current->data . " "; // print the data of the current node
            $current = $current->nextNode; // move to the next node
        }
    }
}

// Example usage
$linkedList = new LinkedList();
$linkedList->insert(1);
$linkedList->insert(3, 1); // Add 3 after 1
$linkedList->insert(2, 1); // Add 2 after 1
$linkedList->display(); // output: 1 2 3
