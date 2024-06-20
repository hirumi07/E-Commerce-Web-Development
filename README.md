# 🛒 E-commerce Platform with RDBMS and NoSQL Integration

## 📜 Overview

Design and implement an E-commerce platform that integrates MySQL and MongoDB to balance data integrity, scalability, and adaptability.

## 📂 Key Components

### 💾 Database Design
- **MySQL**: For structured data (customers, products, orders, payments).
- **MongoDB**: For unstructured, user-generated content (product reviews, feedback).

### 🌐 Web Interface Development
- **HTML Bootstrap**: For a dynamic, responsive interface.
- **JavaScript**: For interactive features like browsing, search, registration, orders, and reviews.

### 🔗 Integration and Functionality
- **Database Integration**: Connect web app with MySQL and MongoDB.
- **Data Access Layer**: Handle SQL queries and CRUD operations.

### ⚙️ Performance and Testing
- **Testing**: Unit, integration, and user acceptance testing.
- **Optimization**: Query optimization, indexing, caching, and tuning.

## 📋 Methodology

1. **🔍 Requirements Analysis**
2. **📐 Database Schema Design**
   - ER Diagrams for clarity.
   - Implement schema in MySQL and configure MongoDB collections.
3. **💾 Data Population**
   - Populate MySQL and MongoDB with sample data.
4. **🌐 Web Interface Development**
   - Build with HTML Bootstrap.
   - Add interactive features with JavaScript.
5. **🔗 Integration**
   - Connect web app with MySQL and MongoDB.
6. **🛠️ Testing and Quality Assurance**
   - Ensure data consistency and reliability.
7. **⚡ Performance Optimization**
   - Optimize queries, indexing, and resource utilization.
8. **📄 Documentation**
   - Document schema, data models, and architecture.

## 🗂️ Database Schema Design

### MySQL Schema
- **Customer_Detail**: CusId (PK), CusName, CusAddress, CusTeleNo, CusEmail
- **Product_Detail**: ProId (PK), ProName, ProdQty, UnitPrice
- **Order**: OrdeId (PK), OrderDate, CusId (FK), TotalAmount
- **Order_Item**: OrderId (FK), ItemId (PK), ProId (FK), ItemQty
- **OrderPayment**: OrderId (PK, FK), PaymentDate, PaymentMethod, Status

### MongoDB Collections
- **UserGeneratedContent**: Flexible document structure for reviews and feedback.

## 🛠️ Implementation Details

- **MySQL**: Schema creation and sample data population.
- **MongoDB**: Manage user-generated content.
- **Web Interface**: HTML Bootstrap for a responsive design.

## 🌟 Application Interface Design

Features include product browsing, search, user registration, order placement, and review submission.
