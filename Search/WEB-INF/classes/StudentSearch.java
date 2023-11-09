import java.io.*;
import java.sql.*;
import javax.servlet.ServletException;
import javax.servlet.http.*;
public class StudentSearch extends HttpServlet {
    private Connection cn;
    public void init()
    {
        try
        {
            Class.forName("com.mysql.cj.jdbc.Driver");
            cn=DriverManager.getConnection("jdbc:mysql://localhost:3306/mydatabase","root","");
        }
        catch(Exception ce)
        {
            System.out.println("Error"+ce.getMessage());
        }

    }
    public void doGet(HttpServletRequest req, HttpServletResponse resp)

            throws ServletException, IOException
    {
        resp.setContentType("text/html");
        PrintWriter pw=resp.getWriter();
        try
        {
            int rno=Integer.parseInt(req.getParameter("t1"));
            String qry="select * from users where id="+rno;
            Statement st=cn.createStatement();
            ResultSet rs=st.executeQuery(qry);
            while(rs.next())
            {
                pw.print("Students Detail");
                pw.print("<table border=1>");
                pw.print("<tr>");
                pw.print("<td>" + rs.getInt(1) + "</td>"); pw.print("<td>" + rs.getString(2) + "</td>");
                pw.print("<td>" + rs.getString(3) + "</td>");
                pw.print("<td>" + rs.getString(4) + "</td>");
                pw.print("</tr>");
                pw.print("</table>");
            } }
        catch(Exception se){}
        pw.close();
    } }