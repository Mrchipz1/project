<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Voting Platform</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Online Voting Platform">
    <meta name="keywords" content="Online Voting Platform, voting ">
    <meta name="author" content="index.html">

    <!-- ==============================================
		Favicons
		=============================================== -->
    <link rel="apple-touch-icon" sizes="57x57" href="source/assets/img/favicons/apple-touch-icon-57x57.html">
    <link rel="apple-touch-icon" sizes="114x114" href="source/assets/img/favicons/apple-touch-icon-114x114.html">
    <link rel="apple-touch-icon" sizes="72x72" href="source/assets/img/favicons/apple-touch-icon-72x72.html">
    <link rel="apple-touch-icon" sizes="144x144" href="source/assets/img/favicons/apple-touch-icon-144x144.html">
    <link rel="apple-touch-icon" sizes="60x60" href="source/assets/img/favicons/apple-touch-icon-60x60.html">
    <link rel="apple-touch-icon" sizes="120x120" href="source/assets/img/favicons/apple-touch-icon-120x120.html">
    <link rel="apple-touch-icon" sizes="76x76" href="source/assets/img/favicons/apple-touch-icon-76x76.html">
    <link rel="apple-touch-icon" sizes="152x152" href="source/assets/img/favicons/apple-touch-icon-152x152.html">
    <link rel="apple-touch-icon" sizes="180x180" href="source/assets/img/favicons/apple-touch-icon-180x180.html">
    <link rel="icon" type="image/png" href="source/assets/img/favicons/favicon-96x96.html" sizes="96x96">
    <link rel="icon" type="image/png" href="source/assets/img/favicons/favicon-16x16.html" sizes="16x16">
    <link rel="icon" type="image/png" href="source/assets/img/favicons/favicon-32x32.html" sizes="32x32">
    <meta name="msapplication-TileColor" content="">

    <!-- ==============================================
		CSS
		=============================================== -->
    <!-- Style-->
    <link type="text/css" href="source/assets/css/style.css" rel="stylesheet" />

    <!-- ==============================================
		Feauture Detection
		=============================================== -->
    <script src="source/assets/js/modernizr-custom.html"></script>

    <script async src="../../../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-4921714320142871",
            enable_page_level_ads: true
        });
    </script>

    <link type="text/css" href="source/assets/css/login.css" rel="stylesheet" />

</head>

<body>

    <!-- Include navigation.php. Contains navigation content. -->

    <!-- ==============================================
     Navigation Section
     =============================================== -->
    <header class="tr-header">
        <nav class="navbar navbar-default" style="background:#000;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">LOGO</a>
                    <button class="btn-header" href="login.php" type="sumbit">Return</button>
                </div>
                <!-- /.navbar-header -->
            </div>

            <!-- /.container -->
        </nav>
        <!-- /.navbar -->
    </header>

    <h3><b>WINNER</b></h3>
    <table class="table">
        <thead>
            <tr>
                <td>S/N</td>
                <td>Name</td>
                <td>Party</td>
                <td>Vote</td>
                <td>Final Result</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Ogbuji Bright</td>
                <td>PDP</td>
                <td>0</td>
                <td>Winner</td>
            </tr>

        </tbody>
    </table>

    <h3><b>CANDIDATE RESULTS</b></h3>
    <div class="tools">
        <input type="search" placeholder="filter..." class="_filter" id="filter">
    </div>

    <table class="table">
        <thead>
            <tr>
                <td>S/N</td>
                <td>Name</td>
                <td>Party</td>
                <td>Vote</td>
                <td>Rank</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Ogbuji Bright</td>
                <td>PDP</td>
                <td>0</td>
                <td>2</td>
            </tr>

        </tbody>
    </table>

    <style type="text/css">
        .btn-header {
            margin-left: 800px;
            margin-top: 5px;
            height: 37px;
            width: 214px;
            border-radius: 2px;
            background: transparent;
            color: white;
        }
        
        .btn-header:hover {
            background: white;
            color: black;
        }
        
        body {
            padding: 20px;
        }
        
        .tools {
            width: 578px;
            padding: 10px;
            background-color: #fff;
            /* border: 1px solid #000; */
            margin-top: 20px;
        }
        
        .tools a {
            padding: 0 4px;
        }
        
        table {
            border: 1px solid #333;
            min-width: 600px;
            border: solid;
            margin-top: 20px;
        }
        
        table thead tr {
            background: #000;
            color: #FFF;
        }
        
        tbody tr td {
            border: solid;
            background: #fff;
        }
        
        table thead td,
        table thead th {
            font-weight: bold;
            padding: 6px;
        }
        
        table tbody tr:nth-child(odd) {
            background: #EEE;
        }
        
        table tbody tr td {
            padding: 6px;
        }
    </style>

    <script>
        $(document).ready(function() {
            var filters = ['entertainment', 'finance', 'retail', 'technology'];

            $('.table').filterTable({
                containerClass: 'tools',
                containerTag: 'nav',
                placeholder: 'filter...',
                quickList: filters,
                quickListClass: '_f',
                label: ''
                    // inputSelector: '#filter'
            })
        });

        ! function(e) {
            var t = e.fn.jquery.split("."),
                i = parseFloat(t[0]),
                a = parseFloat(t[1]);
            e.expr[":"].filterTableFind = 2 > i && 8 > a ? function(t, i, a) {
                return e(t).text().toUpperCase().indexOf(a[3].toUpperCase()) >= 0
            } : jQuery.expr.createPseudo(function(t) {
                return function(i) {
                    return e(i).text().toUpperCase().indexOf(t.toUpperCase()) >= 0
                }
            }), e.fn.filterTable = function(t) {
                var i = {
                        autofocus: !1,
                        callback: null,
                        containerClass: "filter-table",
                        containerTag: "p",
                        hideTFootOnFilter: !1,
                        highlightClass: "alt",
                        inputSelector: null,
                        inputName: "",
                        inputType: "search",
                        label: "Filter:",
                        minRows: 8,
                        placeholder: "search this table",
                        quickList: [],
                        quickListClass: "quick",
                        quickListGroupTag: "",
                        quickListTag: "a",
                        visibleClass: "visible"
                    },
                    a = function(e) {
                        return e.replace(/&/g, "&amp;").replace(/"/g, "&quot;").replace(/</g, "&lt;").replace(/>/g, "&gt;")
                    },
                    l = e.extend({}, i, t),
                    n = function(e, t) {
                        var i = e.find("tbody");
                        "" === t ? (i.find("tr").show().addClass(l.visibleClass), i.find("td").removeClass(l.highlightClass), l.hideTFootOnFilter && e.find("tfoot").show()) : (i.find("tr").hide().removeClass(l.visibleClass), l.hideTFootOnFilter && e.find("tfoot").hide(), i.find("td").removeClass(l.highlightClass).filter(':filterTableFind("' + t.replace(/(['"])/g, "\\$1") + '")').addClass(l.highlightClass).closest("tr").show().addClass(l.visibleClass)), l.callback && l.callback(t, e)
                    };
                return this.each(function() {
                    var t = e(this),
                        i = t.find("tbody"),
                        s = null,
                        r = null,
                        o = null,
                        c = !0;
                    "TABLE" === t[0].nodeName && i.length > 0 && (0 === l.minRows || l.minRows > 0 && i.find("tr").length > l.minRows) && !t.prev().hasClass(l.containerClass) && (l.inputSelector && 1 === e(l.inputSelector).length ? (o = e(l.inputSelector), s = o.parent(), c = !1) : (s = e("<" + l.containerTag + " />"), "" !== l.containerClass && s.addClass(l.containerClass), s.prepend(l.label + " "), o = e('<input type="' + l.inputType + '" placeholder="' + l.placeholder + '" name="' + l.inputName + '" />')), l.autofocus && o.attr("autofocus", !0), e.fn.bindWithDelay ? o.bindWithDelay("keyup", function() {
                        n(t, e(this).val())
                    }, 200) : o.bind("keyup", function() {
                        n(t, e(this).val())
                    }), o.bind("click search", function() {
                        n(t, e(this).val())
                    }), c && s.append(o), l.quickList.length > 0 && (r = l.quickListGroupTag ? e("<" + l.quickListGroupTag + " />") : s, e.each(l.quickList, function(t, i) {
                        var n = e("<" + l.quickListTag + ' class="' + l.quickListClass + '" />');
                        n.text(a(i)), "A" === n[0].nodeName && n.attr("href", "#"), n.bind("click", function(e) {
                            e.preventDefault(), o.val(i).focus().trigger("click")
                        }), r.append(n)
                    }), r !== s && s.append(r)), c && t.before(s))
                })
            }
        }(jQuery);
    </script>

</body>
<html>
