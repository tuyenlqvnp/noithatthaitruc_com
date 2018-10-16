<%@ Page Language="C#" MasterPageFile="~/master-page/istormvn-webpage.master" AutoEventWireup="true" CodeFile="Contact.aspx.cs" Inherits="master_page_Default" Title="Untitled Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="cphHead" Runat="Server">
    <link rel="stylesheet" href="css/lien-he.css" type="text/css" />
    <script type="text/javascript" src="js/contact.js"></script>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="cphMainContent" Runat="Server">
    <div id="company-info" class="span-9">
        <h3>Công Ty Cổ Phần Tin Học Trí Phong <br /></h3>
        ĐC: 472 Quang Trung, P.10, Q.Gò Vấp, Tp.HCM<br />
        ĐT: (08)66 844 588<br />
        <img alt="contact-us" src="images/contact-us.png" />
    </div>
    <div id="contact-form" class="span-10">
        <h5>Thông tin liên hệ<br /></h5>
        <div id="info">
            <table>
                <tr>
                    <td class="span-3">Họ và tên:</td>
                    <td><input class="span-7" type="text"  name="contact_name" /></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input class="span-7" type="text" name="contact_email" /></td>
                </tr>
                <tr>
                    <td>Điện thoại:</td>
                    <td><input class="span-7" type="text" name="contact_phone" /></td>
                </tr>
                <tr>
                    <td>Công ty:</td>
                    <td><input class="span-7" type="text" name="contact_company" /></td>
                </tr>
                <tr>
                    <td>Nội dung:</td>
                    <td><input class="span-7" type="text" name="contact_content" style="height:100px;"/></td>
                </tr>
            </table>
            <input type="button" class="button" value="Gửi" />
        </div>
    </div>
</asp:Content>

