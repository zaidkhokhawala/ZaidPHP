<?php include_once('header.php'); ?>
<div class="dashboard-container">
        <h1 class="dashboard-title">Dashboard Overview</h1>
        
        <div class="dashboard-cards">
            <div class="dashboard-card">
                <i class="fas fa-users"></i>
                <h3>Total Users</h3>
                <p>1,250</p>
            </div>
            <div class="dashboard-card">
                <i class="fas fa-shopping-cart"></i>
                <h3>Orders</h3>
                <p>350</p>
            </div>
            <div class="dashboard-card">
                <i class="fas fa-dollar-sign"></i>
                <h3>Revenue</h3>
                <p>$25,000</p>
            </div>
            <div class="dashboard-card">
                <i class="fas fa-bell"></i>
                <h3>New Notifications</h3>
                <p>12</p>
            </div>
        </div>
        
        <div class="progress-section">
            <h2 class="progress-title">Sales Progress</h2>
            <div class="progress">
                <div class="progress-bar" style="width: 75%; background-color: #f35525;">75%</div>
            </div>
        </div>
        
        <div class="table-section">
            <h2 class="table-title">Recent Orders</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#1023</td>
                        <td>John Doe</td>
                        <td>$150</td>
                        <td>Completed</td>
                    </tr>
                    <tr>
                        <td>#1024</td>
                        <td>Jane Smith</td>
                        <td>$200</td>
                        <td>Pending</td>
                    </tr>
                    <tr>
                        <td>#1025</td>
                        <td>Michael Brown</td>
                        <td>$180</td>
                        <td>Shipped</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="d-flex flex-row">
            <div style="flex: 1; max-width: 50%; display: flex; flex-direction: column;">
                <div class="task-section">
                    <h2 class="task-title">Pending Tasks</h2>
                    <ul class="task-list">
                        <li><i class="fas fa-check-circle" style="color: #f35525;"></i> Update product inventory</li>
                        <li><i class="fas fa-check-circle" style="color: #f35525;"></i> Respond to customer queries</li>
                        <li><i class="fas fa-check-circle" style="color: #f35525;"></i> Schedule marketing campaign</li>
                    </ul>
                </div>
                
                <div class="analytics-section">
                    <h2 class="analytics-title">Performance Analytics</h2>
                    <p><strong>Conversion Rate:</strong> 4.5%</p>
                    <p><strong>Bounce Rate:</strong> 32%</p>
                    <p><strong>Average Session Duration:</strong> 3m 45s</p>
                </div>
            </div>
        </div>
    </div>

<?php include_once('footer.php'); ?>