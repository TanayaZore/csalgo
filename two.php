<!DOCTYPE html>
<html lang="en">
 <!DOCTYPE html>
<html lang="en">
<head>
	<title>CSALGORITHMS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="styles.css"> 
</head>
<body>
	<div class="navbar">
        <a class="algo">
        <img src="./iconn.png" style="width:35px; margin-left:20px" class="rounded-circle" alt="Cinque Terre"> CS ALGORITHMS</a>
        <div class="credentials">
        <a class="login" href="help.php">HELP</a>
         <a class="login" href="profile.php">PROFILE</a>
        <a class="signup" href="logout.php">LOGOUT</a>
        </div>    
    </div>
    <div><br />
		<p><h2 style="font-family:cursive;text-align: center;">DS ALGORITHMS FOR BEGINNERS </h2></p>
	</div>
    <div class="cont" ><br /><br/>
		<p><h3 style="font-family:cursive" >1.Linked list</h3></p>
        <div class="algorithm-section">
        <div class="algorithm-box left-section">
        Linked List:<br/><br/>
        A linked list is a linear data structure in which elements (nodes) are connected using pointers.<br/> Each node contains two parts: data and a reference (pointer) to the next node in the sequence.<br/> The last node's pointer typically points to None, indicating the end of the list.
        <br/><br/>
        Linked lists have a few advantages over arrays, such as dynamic sizing and efficient insertions/deletions, but they may have slightly slower access times due to the need to traverse the list.
        <br/><br/><br/>
        Basic Operations on Linked List:<br/>
        <br/>
        Insertion: Adding a new node to the list.<br/><br/>
        Deletion: Removing a node from the list.<br/><br/>
        Traversal: Visiting each node in the list.<br/><br/>
        Search: Finding a specific node in the list.<br/><br/>
        Update: Modifying the data in a node.<br/> <br/>   
        <br/>
        </div>
        <div class="algorithm-box right-section" >
            <pre style="font-family:cursive;">
            class Node:<br/>
        def __init__(self, data):<br/>
            self.data = data<br/>
            self.next = None<br/>
           
        class LinkedList:<br/>
            def __init__(self):<br/>
                self.head = None<br/>
               
            def append(self, data):<br/>
                new_node = Node(data)<br/>
                if not self.head:<br/>
                    self.head = new_node<br/>
                     return<br/>
                current = self.head<br/>
            while current.next:<br/>
                current = current.next<br/>
                current.next = new_node<br/>
                <br/>
            def display(self):<br/>
                current = self.head<br/>
                while current:<br/>
                    print(current.data, end=" -> ")<br/>
                    current = current.next<br/>
                print("None")<br/>
                <br/>
            # Example usage<br/>
                if __name__ == "__main__":<br/>
                    linked_list = LinkedList()<br/>
                    linked_list.append(1)<br/>
                    linked_list.append(2)<br/>
                    linked_list.append(3)<br/>
                    linked_list.display()<br/>
                    </pre>
        </div>
        </div>

    </div>

    <div class="cont"><br /><br/>
		<p><h3 style="font-family:cursive">2.Stack</h3></p>
        <div class="algorithm-section">
    <div class="algorithm-box left-section">
    <br/>
    A stack is a linear data structure that follows the Last-In-First-Out (LIFO) principle, meaning that the last element added to the stack is the first one to be removed.<br/> Here's the basic algorithm of a stack along with a simple Python implementation:
<br/>
    Stack Operations:<br/>
<br/>
    Push: Add an element to the top of the stack.<br/><br/>
    Pop: Remove the top element from the stack.<br/><br/>
    Peek (Top): Retrieve the top element without removing it.<br/><br/>
    isEmpty: Check if the stack is empty.<br/><br/>
    Size: Get the number of elements in the stack.<br/><br/>
    <br/>
    <br/></div>
    <div class="algorithm-box right-section">
    class Stack:<br/>
    def __init__(self):<br/>
        self.items = []<br/>
        <br/>
    def push(self, item):<br/>
        self.items.append(item)<br/>
        <br/>
    def pop(self):<br/>
        if not self.is_empty():<br/>
            return self.items.pop()<br/>
            <br/>
    def peek(self):<br/>
        if not self.is_empty():<br/>
            return self.items[-1]<br/>
            <br/>
    def is_empty(self):<br/>
        return len(self.items) == 0<br/>
        <br/>
    def size(self):<br/>
        return len(self.items)<br/>
        <br/>
# Example usage<br/>
if __name__ == "__main__":<br/>
    stack = Stack()<br/>
    stack.push(1)<br/>
    stack.push(2)<br/>
    stack.push(3)<br/>
    <br/>
    print("Stack:", stack.items)<br/>
    print("Top element:", stack.peek())<br/>
    print("Stack size:", stack.size())<br/>
    <br/>
    popped_item = stack.pop()<br/>
    if popped_item is not None:<br/>
        print("Popped item:", popped_item)<br/>
        <br/>
    print("Is stack empty?", stack.is_empty())<br/>

<br/>
    </div>
    </div>
    </div>

    <div class="cont"><br /><br/>
		<p><h3 style="font-family:cursive">3.Queue</h3></p>
        <div class="algorithm-section">
    <div class="algorithm-box left-section">
    <br/>
    A queue is a linear data structure that follows the First-In-First-Out (FIFO) principle, meaning that the first element added to the queue is the first one to be removed.<br/> Here's the basic algorithm of a queue along with a simple Python implementation:
    <br/>
    Queue Operations:<br/>
    <br/>
    Enqueue (Push): Add an element to the back of the queue.<br/><br/>
    Dequeue (Pop): Remove the front element from the queue.<br/><br/>
    Front (Peek): Retrieve the front element without removing it.<br/><br/>
    isEmpty: Check if the queue is empty.<br/><br/>
    Size: Get the number of elements in the queue.<br/><br/>
    <br/>
    </div>
    <br/>
    <div class="algorithm-box right-section">
    class Queue:<br/>
    def __init__(self):<br/>
        self.items = []<br/>
        <br/>
    def enqueue(self, item):<br/>
        self.items.append(item)<br/>
        <br/>
    def dequeue(self):<br/>
        if not self.is_empty():<br/>
            return self.items.pop(0)<br/>
            <br/>
    def front(self):<br/>
        if not self.is_empty():<br/>
            return self.items[0]<br/>
            <br/>
    def is_empty(self):<br/>
        return len(self.items) == 0<br/>
        <br/>
    def size(self):<br/>
        return len(self.items)<br/>
        <br/>
# Example usage<br/>
if __name__ == "__main__":<br/>
    queue = Queue()<br/>
    queue.enqueue(1)<br/>
    queue.enqueue(2)<br/>
    queue.enqueue(3)<br/>
    <br/>
    print("Queue:", queue.items)<br/>
    print("Front element:", queue.front())<br/>
    print("Queue size:", queue.size())<br/>
    <br/>
    dequeued_item = queue.dequeue()<br/>
    if dequeued_item is not None:<br/>
        print("Dequeued item:", dequeued_item)<br/>
        <br/>
    print("Is queue empty?", queue.is_empty())<br/>


<br/>
    </div>
    </div>
    </div>

    <div class="cont"><br /><br/>
		<p><h3 style="font-family:cursive">4.Binary Search Tree(BST)</h3></p>
        <div class="algorithm-section">
    <div class="algorithm-box left-section">
    <br/>
    A Binary Search Tree (BST) is a binary tree data structure with the following properties:<br/>
    <br/>
Each node has a key (value) and each key is unique.<br/>
The key in each node is greater than the keys in all nodes in its left subtree.<br/>
The key in each node is less than the keys in all nodes in its right subtree.<br/>
The left and right subtrees are also binary search trees.<br/>
Here's the basic algorithm of a Binary Search Tree along with a simple Python implementation:<br/>
<br/>
BST Operations:<br/>
<br/>
Insert: Add a new key to the BST while maintaining the BST properties.<br/><br/>
Search: Find a key in the BST.<br/><br/>
Delete: Remove a key from the BST while maintaining the BST properties.<br/><br/>
Inorder Traversal: Visit all nodes in the BST in ascending order.<br/><br/>
Preorder Traversal: Visit all nodes in a specific order.<br/><br/>
Postorder Traversal: Visit all nodes in a specific order.<br/><br/>
    </div>
    <br/>
    <div class="algorithm-box right-section">
    class TreeNode:<br/>
    def __init__(self, key):<br/>
        self.key = key<br/>
        self.left = None<br/>
        self.right = None<br/>
        <br/>
class BinarySearchTree:<br/>
    def __init__(self):<br/>
        self.root = None<br/>
        <br/>
    def insert(self, key):<br/>
        self.root = self._insert_recursive(self.root, key)<br/>
        <br/>
    def _insert_recursive(self, root, key):<br/>
        if root is None:<br/>
            return TreeNode(key)<br/>
            <br/>
        if key < root.key:<br/>
            root.left = self._insert_recursive(root.left, key)<br/>
        elif key > root.key:<br/>
            root.right = self._insert_recursive(root.right, key)<br/>
            <br/>
        return root<br/>
        <br/>
    def search(self, key):<br/>
        return self._search_recursive(self.root, key)<br/>
        <br/>
    def _search_recursive(self, root, key):<br/>
        if root is None or root.key == key:<br/>
            return root<br/>
            <br/>
        if key < root.key:<br/>
            return self._search_recursive(root.left, key)<br/>
        else:<br/>
            return self._search_recursive(root.right, key)<br/>
            <br/>
# Example usage<br/>
if __name__ == "__main__":<br/>
    bst = BinarySearchTree()<br/>
    bst.insert(5)<br/>
    bst.insert(3)<br/>
    bst.insert(8)<br/>
    bst.insert(2)<br/>
    bst.insert(4)<br/>
    <br/>
    print("Search 4:", bst.search(4))  # Should print the node<br/>
    print("Search 6:", bst.search(6))  # Should print None<br/>


<br/>
    </div>
    </div>
    </div>

    <div class="cont"><br /><br/>
		<p><h3 style="font-family:cursive">5.Hash Table</h3></p>
        <div class="algorithm-section">
    <div class="algorithm-box left-section">
    <br/>
    A Hash Table (also known as Hash Map) is a data structure that stores key-value pairs and offers efficient insertion, deletion, and retrieval operations.<br/> It uses a hash function to convert keys into indices (buckets) where values are stored.<br/> Here's the basic algorithm of a Hash Table along with a simple Python implementation:
    <br/>
Hash Table Operations:<br/>
<br/>
Insert (Put): Add a key-value pair to the hash table.<br/><br/>
Get: Retrieve the value associated with a given key.<br/><br/>
Delete: Remove a key-value pair from the hash table.<br/><br/>
    </div>
    <br/>
    <div class="algorithm-box right-section">
    class HashTable:<br/>
    def __init__(self, size):<br/>
        self.size = size<br/>
        self.table = [None] * self.size<br/>
        <br/>
    def _hash_function(self, key):<br/>
        return hash(key) % self.size<br/>
        <br/>
    def insert(self, key, value):<br/>
        index = self._hash_function(key)<br/>
        if self.table[index] is None:<br/>
            self.table[index] = []<br/>
        self.table[index].append((key, value))<br/>
        <br/>
    def get(self, key):<br/>
        index = self._hash_function(key)<br/>
        if self.table[index] is not None:<br/>
            for stored_key, value in self.table[index]:<br/>
                if stored_key == key:<br/>
                    return value<br/>
        return None<br/>
        <br/>
    def delete(self, key):<br/>
        index = self._hash_function(key)<br/>
        if self.table[index] is not None:<br/>
            for i, (stored_key, value) in enumerate(self.table[index]):<br/>
                if stored_key == key:<br/>
                    del self.table[index][i]<br/>
                    return<br/>
                    <br/>
# Example usage<br/>
if __name__ == "__main__":<br/>
    hash_table = HashTable(size=10)<br/>
    hash_table.insert("apple", 5)<br/>
    hash_table.insert("banana", 10)<br/>
    hash_table.insert("cherry", 15)<br/>
    <br/>
    print("Get 'banana':", hash_table.get("banana"))<br/>
    print("Get 'grape':", hash_table.get("grape"))<br/>
    <br/>
    hash_table.delete("banana")<br/>
    print("Get 'banana' after delete:", hash_table.get("banana"))<br/>



<br/>
    </div>
    </div>
    </div>
<div class="enroll-buttons">
    <button class="btn btn-primary enroll-button"><a style="color: black;" href="certificate2.php">Claim Certificate</a></button>
</div>
<div class="enroll-buttons">
    <button class="btn btn-primary enroll-button"><a style="color: black;" href="three.php">Next</a></button>
</div>
<br>


    <footer>
		<div class="footer-container">
        <p class="footer-text">Contact us: learn.algo@gmail.com</p>
        </div>
    </footer>    
</body>
</html>