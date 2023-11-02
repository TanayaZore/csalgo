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
  <script>
function myFunction() {
  alert("All courses completed successfully!!");
}
</script>
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
		<p><h2 style="font-family:cursive;text-align: center;">MODERN ALGORITHM DESIGN FOUNDATION </h2></p>
	</div>
    <div class="cont" ><br /><br/>
		<p><h3 style="font-family:cursive" >1.Divide & Conquer</h3></p>
        <div class="algorithm-section">
        <div class="algorithm-box left-section">
        The Divide and Conquer algorithm design paradigm involves breaking down a problem into smaller subproblems, solving each subproblem independently, and then combining the solutions of the subproblems to obtain the solution for the original problem. This approach is commonly used in various algorithms to solve complex problems efficiently. Here's the basic structure of the Divide and Conquer algorithm:
<br/><br/>
        Divide: Break the problem into smaller subproblems that are similar to the original problem but of smaller size.
<br/><br/>
        Conquer: Solve the subproblems recursively. If the subproblems are small enough, solve them directly (base cases).
<br/><br/>
        Combine: Combine the solutions of the subproblems to obtain the solution for the original problem.
        <br/><br/><br/>
        In this example, the array is divided into two halves until the base case is reached, where a single element is compared with itself, and the larger value is returned. Then, the maximum of the maximums from the left and right halves is computed as the final result.
<br/><br/>
    Keep in mind that while this example demonstrates the basic structure of the Divide and Conquer algorithm, more complex algorithms follow similar principles but might have additional steps and optimizations.
<br/><br/>
    Popular algorithms that use the Divide and Conquer paradigm include Merge Sort, QuickSort, Binary Search, and various tree traversal algorithms like Binary Tree Inorder Traversal.<br/>
        </div>
        <div class="algorithm-box right-section" >
            <pre style="font-family:cursive;">
            def find_max(arr, left, right):<br/>
                # Base case: when the array contains only one element<br/>
                    if left == right:<br/>
                        return arr[left]<br/>
                        <br/>
                # Divide the array into two halves<br/>
                mid = (left + right) // 2<br/>
                <br/>
                # Recursively find the maximum element in each half<br/>
                max_left = find_max(arr, left, mid)<br/>
                max_right = find_max(arr, mid + 1, right)<br/>
                <br/>
                # Combine the solutions by choosing the larger of the two maximums
                return max(max_left, max_right)<br/>
                <br/><br/>
                # Example usage<br/>
                arr = [3, 8, 1, 9, 4, 6]<br/>
                max_element = find_max(arr, 0, len(arr) - 1)<br/>
                print("Maximum element:", max_element)<br/>

                    </pre>
        </div>
        </div>

    </div>

    <div class="cont"><br /><br/>
		<p><h3 style="font-family:cursive">2.Greedy Algorithm</h3></p>
        <div class="algorithm-section">
    <div class="algorithm-box left-section">
    <br/>
    <br/>
    The Greedy Algorithm is a paradigm in algorithm design where at each step, you make the locally optimal choice in the hopes that it will lead to a globally optimal solution. Greedy algorithms work well for optimization problems where making the best choice at each step will eventually lead to an optimal solution. However, they might not always provide globally optimal solutions for every problem.
    <br/><br/>
    Here's the basic structure of the Greedy Algorithm:
    <br/><br/>
    Initialization: Initialize an empty solution or start with a feasible initial solution.
    <br/><br/>
    Greedy Choice: At each step, select the best option according to some criteria.
    <br/><br/>
    Feasibility Check: Check if the chosen option is feasible within the problem constraints.
    <br/><br/>
    Solution Update: Update the current solution with the chosen option.
    <br/><br/>
    Termination: Repeat steps 2 to 4 until a stopping condition is met.
    <br/><br/><br/><br/>
    In this example, the Greedy Algorithm selects items based on their value-to-weight ratio, starting with the items that have the highest ratio. <br/>It repeatedly adds fractional parts of items to the knapsack until the knapsack's capacity is exhausted.
    <br/>
    Keep in mind that Greedy Algorithms are not always guaranteed to provide the optimal solution for every problem.<br/> Careful analysis is needed to ensure that the locally optimal choices indeed lead to a globally optimal solution.
    <br/></div>
    <div class="algorithm-box right-section">
    <br/> def fractional_knapsack(values, weights, capacity):
    <br/> n = len(values)
    <br/> items = [(values[i], weights[i], i) for i in range(n)]
    <br/> items.sort(key=lambda x: x[0] / x[1], reverse=True)  # Sort by value-to-weight ratio
    <br/> <br/>
    total_value = 0<br/>
    knapsack = [0] * n<br/>
    <br/>
    for value, weight, index in items:<br/>
        if capacity == 0:<br/>
            break<br/>
            <br/>
        # Take the maximum possible fraction of the item<br/>
        fraction = min(weight, capacity) / weight<br/>
        total_value += fraction * value<br/>
        capacity -= fraction * weight<br/>
        knapsack[index] = fraction<br/>
        <br/>
    return total_value, knapsack<br/>
    <br/>
        # Example usage<br/>
        values = [60, 100, 120]<br/>
        weights = [20, 50, 30]<br/>
        capacity = 50<br/>
        max_value, selected_items = fractional_knapsack(values, weights, capacity)<br/>
        print("Maximum value:", max_value)<br/>
        print("Selected items (fractions):", selected_items)<br/>

<br/>
    </div>
    </div>
    </div>

    <div class="cont"><br /><br/>
		<p><h3 style="font-family:cursive">3.Dynamic Programming</h3></p>
        <div class="algorithm-section">
    <div class="algorithm-box left-section">
    <br/>
   
        Dynamic Programming is a paradigm in algorithm design that aims to solve complex problems by breaking them down into simpler subproblems and storing the solutions to those subproblems to avoid redundant calculations. <br/>It's particularly useful when the same subproblems are encountered multiple times.<br/> Dynamic Programming often leads to more efficient solutions compared to brute force approaches.
        <br/><br/>
        The basic idea of Dynamic Programming can be summarized by the following steps:
        <br/><br/>
        Identify Overlapping Subproblems: Break down the problem into smaller subproblems that are repeated or overlapped.
        <br/><br/>
        Define Recurrence Relation: Express the solution of the original problem in terms of solutions to its subproblems.
        <br/><br/>
        Memoization or Tabulation: Store the solutions to subproblems in a data structure (memoization) or build a table of solutions bottom-up (tabulation).
        <br/><br/>
        Combine Subproblem Solutions: Combine the solutions of subproblems to obtain the solution of the original problem.
    <br/><br/><br/><br/>
        In this example, the Dynamic Programming approach eliminates redundant calculations by storing the results of previously solved subproblems.<br/> The memoization approach uses a dictionary to cache subproblem solutions, while the tabulation approach builds a table from the bottom up, avoiding recursion.
        <br/>
        Dynamic Programming can be applied to a wide range of problems, including shortest path problems (like Dijkstra's algorithm), sequence alignment (like the Edit Distance problem), and many others where subproblems are repeated or overlapping.<br/>
    </div>
    <br/>
    <div class="algorithm-box right-section">
    # Using memoization (top-down approach)<br/>
    def fibonacci_memoization(n, memo={}):<br/>
        if n in memo:<br/>
            return memo[n]<br/>
            <br/>
        if n <= 2:<br/>
            return 1<br/>
            <br/>
        fib_n = fibonacci_memoization(n - 1, memo) + fibonacci_memoization(n - 2, memo)<br/>
        memo[n] = fib_n<br/>
        return fib_n<br/>
        <br/>
        # Using tabulation (bottom-up approach)<br/>
        def fibonacci_tabulation(n):<br/>
            fib = [0] * (n + 1)<br/>
            fib[1] = fib[2] = 1<br/>
            <br/>
        for i in range(3, n + 1):<br/>
            fib[i] = fib[i - 1] + fib[i - 2]<br/>
            <br/>
        return fib[n]<br/>
        <br/>
# Example usage<br/>
n = 10<br/>
fib_memo = fibonacci_memoization(n)<br/>
fib_tab = fibonacci_tabulation(n)<br/>
print("Fibonacci number (memoization):", fib_memo)<br/>
print("Fibonacci number (tabulation):", fib_tab)<br/>


<br/>
    </div>
    </div>
    </div>

    <div class="cont"><br /><br/>
		<p><h3 style="font-family:cursive">4.Randomized Algorithm</h3></p>
        <div class="algorithm-section">
    <div class="algorithm-box left-section">
    <br/>
    <br/>
    Randomized Algorithms are algorithms that use randomness to solve problems or improve the efficiency of algorithms. <br/>These algorithms can introduce randomness to make decisions or choose elements randomly, often leading to better average-case performance.<br/> The results of randomized algorithms can vary on different runs due to the inherent randomness involved.
    <br/><br/>
    Here's a basic outline of how a Randomized Algorithm works:
    <br/><br/>
    Random Choices: The algorithm incorporates randomness by making random choices or using random values during its execution.
    <br/><br/>
    Probability Analysis: The algorithm's performance is analyzed in terms of probabilities and expected values over multiple runs.
    <br/><br/>
    Average-Case Analysis: Instead of worst-case analysis, randomized algorithms focus on average-case performance, which can often be better.
    <br/><br/>
    Monte Carlo vs. Las Vegas: Randomized algorithms are classified into two types based on their behavior. Monte Carlo algorithms provide a random output that is likely to be correct, while Las Vegas algorithms guarantee a correct output, but their runtime can be random.
    <br/><br/><br/><br/>
    In this example, the algorithm generates random points within a unit square (with coordinates between 0 and 1).<br/> It counts the points that fall within a quarter circle centered at the origin.<br/> The ratio of points inside the circle to the total points is used to estimate the area of the quarter circle, which can then be used to estimate the value of π.
    <br/>
    Keep in mind that randomized algorithms may not always provide deterministic results, but they can be useful in cases where average-case performance is more important than worst-case performance.<br/>
    </div>
    <br/>
    <div class="algorithm-box right-section">
import random<br/>
    <br/>
def monte_carlo_pi(num_points):<br/>
    inside_circle = 0<br/>
    <br/>
    for _ in range(num_points):<br/>
        x = random.uniform(0, 1)<br/>
        y = random.uniform(0, 1)<br/>
        <br/>
        if x*x + y*y <= 1:<br/>
            inside_circle += 1<br/>
            <br/>
    estimated_pi = (inside_circle / num_points) * 4<br/>
    return estimated_pi<br/>
    <br/>
# Example usage<br/>
num_points = 100000<br/>
estimated_pi = monte_carlo_pi(num_points)<br/>
print("Estimated value of π:", estimated_pi)<br/>



<br/>
    </div>
    </div>
    </div>

    <div class="cont"><br /><br/>
		<p><h3 style="font-family:cursive">5.Graph Algorithm</h3></p>
        <div class="algorithm-section">
    <div class="algorithm-box left-section">
    <br/>
    Graph algorithms are used to solve problems involving graphs, which are collections of nodes (vertices) connected by edges.<br/><br/> Graph algorithms play a crucial role in various applications, including network analysis, social networks, route planning, and more.<br/> Here's a simple example of a graph traversal algorithm using Depth-First Search (DFS):
    <br/><br/><br/><br/>
    In this example, Depth-First Search (DFS) is used to traverse the graph starting from a given node ('A' in this case). <br/>DFS explores as far as possible along each branch before backtracking.<br/> The visited nodes are kept in a set to avoid revisiting nodes.
<br/>
    Keep in mind that there are many other graph algorithms beyond simple traversal. Some notable ones include:
    <br/><br/>
    Breadth-First Search (BFS): Similar to DFS, but explores neighbors level by level instead of deeply.
    <br/><br/>
    Dijkstra's Algorithm: Finds the shortest path between nodes in a weighted graph.
    <br/><br/>
    Bellman-Ford Algorithm: Finds the shortest path in a weighted graph, even when there are negative edge weights.
    <br/><br/>
    Kruskal's Algorithm: Finds the minimum spanning tree of a connected, undirected graph.
    <br/><br/>
    Prim's Algorithm: Another approach to find the minimum spanning tree of a connected, undirected graph.
    <br/><br/>
    Floyd-Warshall Algorithm: Computes all-pairs shortest paths in a weighted graph.
    <br/><br/>
    Topological Sorting: Orders the nodes in a directed acyclic graph such that for every directed edge (u, v), node u comes before node v in the ordering.
    <br/><br/>
    Max Flow - Min Cut: Algorithms for finding the maximum flow in a flow network.
    <br/><br/>
    These are just a few examples of graph algorithms.<br/> Depending on the problem at hand, you might need to select the appropriate algorithm or combine multiple algorithms to achieve the desired outcome.
    </div>
    <br/>
    <div class="algorithm-box right-section">
# Graph represented as an adjacency list<br/>
graph = {<br/>
    'A': ['B', 'C'],<br/>
    'B': ['A', 'D', 'E'],<br/>
    'C': ['A', 'F'],<br/>
    'D': ['B'],<br/>
    'E': ['B', 'F'],<br/>
    'F': ['C', 'E']<br/>
}<br/>
<br/>
def dfs_recursive(graph, node, visited):<br/>
    if node not in visited:<br/>
        print(node, end=' ')<br/>
        visited.add(node)<br/>
        for neighbor in graph[node]:<br/>
            dfs_recursive(graph, neighbor, visited)<br/>
            <br/>
# Example usage<br/>
start_node = 'A'<br/>
visited_nodes = set()<br/>
print("DFS traversal:")<br/>
dfs_recursive(graph, start_node, visited_nodes)<br/>
print()<br/>


<br/>
    </div>
    </div>
    </div>
<div class="enroll-buttons">
    <button class="btn btn-primary enroll-button"><a style="color: black;" href="certificate3.php">Claim Certificate</a></button>
</div>
<div class="enroll-buttons">
   <form action="update_completion.php" method="post">
    <button type="submit" class="btn btn-primary enroll-button" name="done">Done</button>
</form>
</div>
<br>


    <footer>
		<div class="footer-container">
        <p class="footer-text">Contact us: learn.algo@gmail.com</p>
        </div>
    </footer>    
</body>
</html>