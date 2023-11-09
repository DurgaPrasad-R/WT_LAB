<%@ page import="java.sql.*" %>
<html>
<head>
    <title>Simple Database Example in JSP</title>
</head>
<body bgcolor="yellow">
    <%
        String uname = request.getParameter("user");
        String pwd = request.getParameter("pwd");
        Connection con = null;
        PreparedStatement ps = null;
        ResultSet rs = null;

        try {
            Class.forName("com.mysql.jdbc.Driver");
            con = DriverManager.getConnection("jdbc:mysql://localhost:3306/test", "root", "");

            String sql = "SELECT userName, pass FROM student WHERE userName = ? AND pass = ?";
            ps = con.prepareStatement(sql);
            ps.setString(1, uname);
            ps.setString(2, pwd);

            rs = ps.executeQuery();

            if (rs.next()) {
                out.println("Authorized person");
            } else {
                out.println("Unauthorized person");
            }
        } catch (Exception e) {
            out.println("Error: " + e);
        } finally {
            try {
                if (rs != null) rs.close();
                if (ps != null) ps.close();
                if (con != null) con.close();
            } catch (SQLException e) {
                out.println("Error closing resources: " + e);
            }
        }
    %>
</body>
</html>
