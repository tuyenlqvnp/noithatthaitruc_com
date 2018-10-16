<%@ Page Language="C#" MasterPageFile="~/master-page/istormvn-webpage.master" AutoEventWireup="true" CodeFile="Home.aspx.cs" Inherits="master_page_Default" Title="Trang chủ" %>

<asp:Content ID="Content1" ContentPlaceHolderID="cphHead" Runat="Server">
    <script type="text/javascript" src="js/home.js"></script>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="cphMainContent" Runat="Server">
    <div id="left-col" class="span-13 border">
        <div id="first-row" class="span-13 clear">
            <div class="row-img span-3">
                <img alt="1" src="images/laptop.png" />
            </div>
            <div class="row-content span-9">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at turpis est, id blandit tortor. Nam elit massa, pharetra ut rutrum vitae, porta vel tortor. Quisque felis metus, facilisis eu suscipit nec, pretium id magna.
            </div>
        </div>
        
        <div class="row-sep span-8"></div>
        
        <div id="second-row" class="span-13 clear">
            <div class="row-img span-3">
                <img alt="1" src="images/notebook.png" />
            </div>
            <div class="row-content span-9">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at turpis est, id blandit tortor. Nam elit massa, pharetra ut rutrum vitae, porta vel tortor. Quisque felis metus, facilisis eu suscipit nec, pretium id magna.
            </div>
        </div>
        
        <div class="row-sep span-8"></div>
        
        <div id="third-row" class="span-13 clear">
            <div class="row-img span-3">
                <img alt="1" src="images/phone.png" />
            </div>
            <div class="row-content span-9">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at turpis est, id blandit tortor. Nam elit massa, pharetra ut rutrum vitae, porta vel tortor. Quisque felis metus, facilisis eu suscipit nec, pretium id magna.
            </div>
        </div>
    </div>
    
    <div id="right-col" class="span-7 prepend-1">
    INTRO<br /><br />
    Nulla venenatis, arcu ac porta porttitor, ipsum leo vestibulum lectus, nec mollis magna mi ut tortor. Nullam suscipit placerat fringilla. Praesent tincidunt pharetra posuere. Cras blandit interdum nulla, in rutrum risus commodo sit amet. Fusce ipsum tellus, interdum ac tincidunt sed, egestas a magna. Curabitur a elit vel elit faucibus ornare in vel ligula. Sed fermentum, nisi molestie ullamcorper sollicitudin, mi nisl auctor dui, vestibulum blandit risus ligula non libero. Suspendisse vulputate adipiscing quam, vitae ultrices elit lobortis sit amet. 
    </div>
</asp:Content>

