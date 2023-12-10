<div>
    Home panel
</div>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        /* Thêm các kiểu CSS cho in */
        @media print {
            body {
                font-family: Arial, sans-serif;
                margin: 1cm;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 1em;
            }

            th,
            td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: left;
            }

            th {
                background-color: #f2f2f2;
            }
        }
    </style>
</head>

<body>

    <h2>Invoice</h2>
    <p>Invoice Number: INV-001</p>
    <p>Date: 2023-01-15</p>
    <p>Customer: John Doe</p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Product A</td>
                <td>25.99</td>
                <td>2</td>
                <td>51.98</td>
            </tr>
            <!-- Thêm các hàng dữ liệu khác nếu cần -->
        </tbody>
    </table>

    <p>Total Amount: 120.00</p>

    <!-- Thêm nút in để in trang HTML -->
    <button onclick="printInvoice()">Print Invoice</button>

    <script>
        // Hàm để in trang HTML
        function printInvoice() {
            window.print();
        }
    </script>

</body>

</html>