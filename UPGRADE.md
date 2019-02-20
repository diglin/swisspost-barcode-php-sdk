# Instruction

If you need to upgrade the SDK to the latest WSDL version (currently 2.4), you have to edit the `Generator.php` by changing the WSDL file, be aware that the custom one fix some issues related to the type of XML elements. You will need to redo the fixes or at least compare with the custom one.

You will need also to update `src/Parameters.php` and change the WSDL Url with the latest version.

```
protected $wsdl = 'https://wsbc.post.ch/wsbc/barcode/v2_4?wsdl';
``` 