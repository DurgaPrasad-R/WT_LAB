<%@ page import="java.sql.*"%>
<html>
<body>
<center>
<h1>Book Cart Display </h1>
<table border="1" >
<tr bgcolor="green">
<td>Book Name</td>
<td>Price </td>
<td>Quantity </td>
<td>Amount in Rupees</td>
</tr>
<%
try{
Class.forName("com.mysql.jdbc.Driver");
Connection con=DriverManager.getConnection(
"jdbc:mysql://localhost:3306/test"
,
"root"
,
"");
Statement stmt=con.createStatement();
ResultSet rs=stmt.executeQuery("select * from cart");
while(rs.next()) { %>
<tr bgcolor="yellow">
<td><%=rs.getString("Book Name") %></td>
<td><%=rs.getInt("Price") %></td>
<td><%=rs.getInt("Quantity") %></td>
<td><%=rs.getInt("Amount") * rs.getInt("Quantity")
%></td>
</tr>
<%}
con.close();
}catch(Exception e){
out.println(e);
}
%>
</center>
</body>
</html>