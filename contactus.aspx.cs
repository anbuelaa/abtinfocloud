using System;
using System.Collections.Generic;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Net.Mail;

public partial class contactus : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }

    private void SendMail()
    {
        string MailControlMessage = "";
        MailMessage ObjMail;
        ObjMail = new MailMessage();
        try
        {
            ObjMail.From = new MailAddress("info@abtinfocloud.com", "ABT Website Contact Feed Back");
            try
            {
                ObjMail.To.Add("info@abtinfo.net");
                //ObjMail.To.Add(email.Value.Trim().Replace(';', ','));
            }
            catch
            {
                MailControlMessage = "Sorry!. Please give the correct Mail Id in To";
                email.Focus();
                throw new Exception(MailControlMessage);
            }

            string strBody = "";
            strBody = "Name: " + contactname.Value.Trim() + " \n\n <br> Designation: " + designation.Value.Trim() + " \n\n <br> Company: " + company.Value.Trim() + " \n\n <br> Phone: " + phone.Value.Trim() + " \n\n <br> Email: " + email.Value.Trim() + "  \n\n <br> Message: " + message.Value.Trim() + "";
            ObjMail.Subject = "Contact Feed Back From ABTinfocloud.com";
            ObjMail.IsBodyHtml = true;
            ObjMail.Body = strBody.Trim();

            string strMailServerIP = "";
            strMailServerIP = "mail.abtinfo.net";// ;"118.91.233.56"
            SmtpClient emailClient = new SmtpClient(strMailServerIP);
            emailClient.Port = 25;
            emailClient.Credentials = new System.Net.NetworkCredential("info@abtinfo.net", "P@ss4Inf0");
            emailClient.Send(ObjMail);
            ObjMail.Dispose();

            MailControlMessage = "alert('Your feed back has been recorded.!.');";
            LoadForNewMail();
        }
        catch (Exception ex)
        {
            ObjMail.Dispose();
            if (MailControlMessage.Trim() == "")
            {
                MailControlMessage = "Sorry!. Email has not been send. Please Contact System Admin!. Error System Description :" + ex.Message;
            }
            MailControlMessage = "alert('" + MailControlMessage + "');";
        }
        finally
        {
            ScriptManager.RegisterStartupScript(this, typeof(string), "UserControlEMailControlErrorAndConditionAlert", MailControlMessage, true);
        }
    }

    private void LoadForNewMail()
    {
        try
        {
            ClearMailAddress();
        }
        catch (Exception ex)
        {
            //DataAccessHelper.DataAccess.WriteError(DataAccessHelper.DataAccess.ConnectionString, ex);
        }
    }

    private void ClearMailAddress()
    {
        contactname.Value = "";
        designation.Value = "";
        company.Value = "";
        phone.Value = "";
        email.Value = "";
        message.Value = "";
    }

    protected void btnSubmit_Click(object sender, EventArgs e)
    {
        SendMail();
    }

}