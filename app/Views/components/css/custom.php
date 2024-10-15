<style>
*
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.navbar-brand
{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif';
    font-weight: bold;
    color: #c89c04;
}

.navbar-brand:hover
{
    color: #c5941b;
}

.navbar-link
{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'
    font-weight: bold;
    color: #c5941b;
}

.navbar-link:hover
{
    color: #c5941b;
}

.navbar-custom
{
    background-color: #452231;
}

.p
{
    text-align: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif';
    color: #f6e5d7;
}

.body
{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif';
    font-size: 16px;
    line-height: 1.5;
    background-color: #452231;
    color: #f6e5d7;
}

.cream 
{
    color: #f6e5d7;
}

.licorice
{
    background-color: #452231;
    color: #f6e5d7;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif';
}

.center 
{
    text-align: center;
}

.hero-section, .about_hero-section 
{
    position: relative;
    text-align: left;
    color: #452231;
    background-color: #452231;
}

.hero-image 
{
    width: 100%;
    height: auto;
    opacity: 0.8;
    background-color: #452231;
}

.about_hero-section img
{
    width: 80%;
    height: auto;
    opacity: 0.8;
    background-color: #452231;
    display: block;
    margin-left: auto;
    margin-right: auto;
    max-width: 800px;
    border: 5px solid #c89c04;
    padding: 10px;
}

.hero-section h1
{
    position: absolute;
    top: 20%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 5em;
}

.about_hero-section h1
{
    position: absolute;
    top: 60%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 5em;
    color: #c5941b;
} 

.hero-section p
{
    position: absolute;
    top: 30%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 2em;
    text-align: center;
}

.about_hero-section p
{
    position: absolute;
    top: 80%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 2em;
    color: #c5941b;
    text-align: center;
} 

#Intro, #WhyUs, #Flights, #Deals 
{
    padding: 20px;
    margin-bottom: 20px;
    border: 1px solid #c89c04;
    border-radius: 5px;
    background-color: #452231;
    text-align: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'
}

#Intro h2, #WhyUs h2, #Flights h2, #Deals h2 
{
    font-size: 24px;
    color: #c5941b;
    margin-bottom: 10px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'
}

#Intro p, #WhyUs p, #Flights p, #Deals p 
{
    font-size: 18px;
    color: #c5941b;
    line-height: 1.5;
    margin-bottom: 15px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'
}

.carousel h3 
{
    font-size: 2em;
    color: #c89c04;
    text-align: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif';
    margin-bottom: 10px;
}

#WhyUs table 
{
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'
}

#WhyUs th, #WhyUs td 
{
    padding: 10px;
    border: 1px solid #c5941b;
    text-align: center;
}

#WhyUs th 
{
    background-color: #f6e5d7;
    font-weight: bold;
}

#WhyUs td 
{
    background-color: #f6e5d7;
}

#Deals form 
{
    margin-top: 20px;
}

#Deals .form-group {
    margin-bottom: 15px;
}

#Deals .form-control 
{
    width: 100%;
    padding: 10px;
    text-align: center;
    border: 1px solid #f6e5d7;
    border-radius: 4px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'
}

#Deals label 
{
    font-size: 14px;
    color: #c89c04;
    margin-bottom: 5px;
    display: block;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'
}

#AboutEtihad 
{
    padding: 20px;
    margin-bottom: 20px;
    border: 1px solid #452231;
    /* border-radius: 5px; */
    background-color: #452231;
    text-align: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'
}

#AboutEtihad h2 
{
    font-size: 24px;
    color: #c5941b;
    margin-bottom: 10px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'
}

#AboutEtihad p 
{
    font-size: 18px;
    color: #c5941b;
    line-height: 1.5;
    margin-bottom: 15px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'
}

#EthicsCompliance {
    padding: 20px;
    margin-bottom: 20px;
    border: 1px solid #c89c04;
    border-radius: 5px;
    background-color: #452231;
    text-align: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'
}

#EthicsCompliance h2 
{
    font-size: 24px;
    color: #c5941b;
    margin-bottom: 10px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'
}

#EthicsCompliance p 
{
    font-size: 18px;
    color: #c5941b;
    line-height: 1.5;
    margin-bottom: 15px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'
}

#EthicsCompliance .accordion-item 
{
    margin-bottom: 10px;
}

#EthicsCompliance .accordion-button 
{
    background-color: #cfb27b;
    color: #452231;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'
}

#EthicsCompliance .accordion-button:focus 
{
    box-shadow: none;
}

#EthicsCompliance .accordion-body 
{
    background-color: #f5e6d8;
    color: #452231;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'
}

#ForTheWorld 
{
    padding: 20px;
    margin-bottom: 20px;
    border: 1px solid #c89c04;
    border-radius: 5px;
    background-color: #452231;
    text-align: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'
}

#ForTheWorld h2 
{
    font-size: 24px;
    color: #c5941b;
    margin-bottom: 10px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'
}

#ForTheWorld p 
{
    font-size: 18px;
    color: #c5941b;
    line-height: 1.5;
    margin-bottom: 15px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'
}

#ForTheWorld h3 
{
    font-size: 22px;
    color: #c89c04;
    margin-bottom: 10px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'
}

#ForTheWorld h4 
{
    font-size: 20px;
    color: #c89c04;
    margin-bottom: 10px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'
}

#ForTheWorld ul 
{
    list-style-type: disc;
    padding-left: 20px;
    text-align: left;
    color: #f6e5d7;
}

#ForTheWorld li 
{
    margin-bottom: 10px;
}

#ForTheWorld .img-principal, #ForTheWorld .img-obj 
{
    width: 60%;
    height: auto;
    border: 3px solid #c89c04;
    padding: 5px;
    background-color: #452231;
}

#ExpEtihad {
    padding: 20px;
    margin-top: 20px;
    margin-bottom: 20px;
    border: 1px solid #c89c04;
    background-color: #452231;
    text-align: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'
}

#ExpEtihad h2 {
    font-size: 24px;
    color: #c5941b;
    margin-bottom: 10px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'
}

#ExpEtihad h3 
{
    font-size: 22px;
    color: #c89c04;
    margin-bottom: 10px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'
}

#ExpEtihad .Classes 
{
    width: 150px;
    height: 150px;
    padding: 5px;
    background-color: #452231;
    display: inline-block;
    vertical-align: top;
}

#ExpEtihad p 
{
    font-size: 18px;
    color: #c5941b;
    line-height: 1.5;
    margin-bottom: 15px;
    display: inline-block;
    vertical-align: top;
    width: calc(100% - 160px);
    margin-left: 10px;
}

#Fleet 
{
    padding: 20px;
    margin-bottom: 20px;
    border: 1px solid #c89c04;
    border-radius: 5px;
    background-color: #452231;
    text-align: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'
}

#Fleet p 
{
    font-size: 16px;
    color: #c5941b;
    line-height: 1.5;
    margin-bottom: 15px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'
}

#Fleet h2 
{
    font-size: 24px;
    color: #c5941b;
    margin-bottom: 10px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'
}

#Fleet h3 
{
    font-size: 22px;
    color: #c89c04;
    margin-bottom: 10px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'
}

#Fleet h4 
{
    font-size: 20px;
    color: #c89c04;
    margin-bottom: 5px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'
}

#Fleet li 
{
    font-size: 18px;
    color: #f6e5d7;
    line-height: 1.5;
    margin-bottom: 5px;
    list-style-type: none;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'
}

#Fleet a 
{
    color: #c89c04;
    text-decoration: none;
}

#Fleet a:hover 
{
    text-decoration: underline;
}

.FleetsClass 
{
    width: 300px;
    height: auto;
    padding: 5px;
    background-color: #452231;
    margin-bottom: 10px;
}

</style>