<?xml version="1.0" encoding="UTF-8"?>
<!--Group 1-->
<!--Group Member:   Shun Hei, Yiu   300247812
                    Rui Heng, Tan   300102229-->
<!--Exercise 15.9-->
<xsl:stylesheet version="1.0"
   xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
   <xsl:output method="html" doctype-system="about:legacy-compat"/>

   <xsl:template match="/">
      <html xmlns="http://www.w3.org/1999/xhtml">
         <head>
            <meta charset="utf-8"/>
            <title>Grandma White's Cookies Nutrition Facts</title>
            <link rel = "stylesheet" type = "text/css" href = "style.css"/>

         </head>
         <body>
            <h1>Grandma White's Cookies Nutrition Facts</h1>
            <h2>Product Information</h2>
            <table>
               <xsl:apply-templates select="Cookies/information/*"/>
            </table>
            <h2>Nutrient</h2>
            <table>
               <tr>
                  <th>Nutrient</th>
                  <th>Amount per Serving</th>
               </tr>
               <xsl:apply-templates select="Cookies/*[not(self::information)]"/>
            </table>
         </body>
      </html>
   </xsl:template>

   <xsl:template match="Cookies/information/*">
      <tr>
         <td>
            <xsl:value-of select="local-name()"/>
         </td>
         <td>
            <xsl:value-of select="."/>
         </td>
      </tr>
   </xsl:template>

   <xsl:template match="Cookies/*">
      <tr>
         <td>
            <xsl:value-of select="local-name()"/>
         </td>
         <td>
            <xsl:value-of select="."/>
         </td>
      </tr>
   </xsl:template>

</xsl:stylesheet>
