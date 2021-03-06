<!DOCTYPE html>
<html lang="en">

<?php include("includes/head.php") ?>

<body>
    <div id="dashboard_info">
        <?php include("includes/nav.php") ?>
        <div id="dashboard_main">
            <header id="dashboard_header">
                <div id="sellers_header">
                    <img src="nike-logo.jpg" alt="your logo" id="sellers_image">
                    <h2 id="sellers_company_name">Nike</h2>
                </div>
                <button id="logout_button">Logout</button>
            </header>

            <h2 id="top_products_header">Top Products</h2>
            <div class="dashboard_row" id="top_products">
                <div class="section top_product">
                    <img src="topshoe1.jpg" class="top_product_image">
                    <div class="top_product_info">
                        <p class="top_product_name">Nike Tanjun</p>
                        <p class="progress_label">Remaining: <strong>40</strong></p>
                        <div class="top_product_stock">
                            <p class="progress_min">0</p>
                            <progress max="100" value="40"><span>40</span></progress>
                            <p class="progress_max">100</p>
                        </div>
                    </div>
                </div>
                <div class="section top_product">
                    <img src="topshoe1.jpg" class="top_product_image">
                    <div class="top_product_info">
                        <p class="top_product_name">Nike Tanjun</p>
                        <p class="progress_label">Remaining: <strong>40</strong></p>
                        <div class="top_product_stock">
                            <p class="progress_min">0</p>
                            <progress max="100" value="40"><span>40</span></progress>
                            <p class="progress_max">100</p>
                        </div>
                    </div>
                </div>
                <div class="section top_product">
                    <img src="topshoe1.jpg" class="top_product_image">
                    <div class="top_product_info">
                        <p class="top_product_name">Nike Tanjun</p>
                        <p class="progress_label">Remaining: <strong>40</strong></p>
                        <div class="top_product_stock">
                            <p class="progress_min">0</p>
                            <progress max="100" value="40"><span>40</span></progress>
                            <p class="progress_max">100</p>
                        </div>
                    </div>
                </div>
                <div class="section top_product">
                    <img src="topshoe1.jpg" class="top_product_image">
                    <div class="top_product_info">
                        <p class="top_product_name">Nike Tanjun</p>
                        <p class="progress_label">Remaining: <strong>40</strong></p>
                        <div class="top_product_stock">
                            <p class="progress_min">0</p>
                            <progress max="100" value="40"><span>40</span></progress>
                            <p class="progress_max">100</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dashboard_row">
                <div class="section graphs">
                    <canvas id="bar_chart"></canvas>
                </div>
                <div class="section graphs">
                    <canvas id="line_chart"></canvas>
                </div>
                <div class="section graphs">
                    <canvas id="doughnut_chart"></canvas>
                </div>
            </div>

            <div class="dashboard_row">
                <div class="section" id="orders_section">
                    <h1 class="section_header">Recent Orders</h1>
                    <table id="orders">
                        <tr>
                            <th>Order #</th>
                            <th>Date</th>
                            <th>Customer Name</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>0000</td>
                            <td>00-00-00</td>
                            <td>John Smith</td>
                            <td>$0.00</td>
                            <td>Completed</td>
                            <td class="order_action_buttons"><button class="view_order_button">View</button><button class="ship_order_button">Ship</button></td>
                        </tr>
                        <tr>
                            <td>0000</td>
                            <td>00-00-00</td>
                            <td>John Smith</td>
                            <td>$0.00</td>
                            <td>Completed</td>
                            <td class="order_action_buttons"><button class="view_order_button">View</button><button class="ship_order_button">Ship</button></td>
                        </tr>
                        <tr>
                            <td>0000</td>
                            <td>00-00-00</td>
                            <td>John Smith</td>
                            <td>$0.00</td>
                            <td>Completed</td>
                            <td class="order_action_buttons"><button class="view_order_button">View</button><button class="ship_order_button">Ship</button></td>
                        </tr>
                        <tr>
                            <td>0000</td>
                            <td>00-00-00</td>
                            <td>John Smith</td>
                            <td>$0.00</td>
                            <td>Completed</td>
                            <td class="order_action_buttons"><button class="view_order_button">View</button><button class="ship_order_button">Ship</button></td>
                        </tr>
                    </table>
                    <button id="orders_button">View All Orders</button>
                </div>
                <div class="section" id="reviews_section">
                    <a class="review_arrows prev">&#10094;</a>
                    <div id="reviews">
                        <h1 class="section_header">Reviews</h1>
                        <img src="topshoe1.jpg" class="review_product_image">
                        <p class="reviewer_name">John Smith</p>
                        <p class="review">"<span class="customer_review">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>"</p>
                        <div id="star_rating">
                            <span class="fa fa-star checked_star"></span>
                            <span class="fa fa-star checked_star"></span>
                            <span class="fa fa-star checked_star"></span>
                            <span class="fa fa-star checked_star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                    <a class="review_arrows next">&#10095;</a>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="sales.js"></script>

</body>

</html>