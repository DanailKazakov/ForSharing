using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Text.RegularExpressions;
using System.Globalization;
using System.Threading;

namespace TextConverter
{
    public partial class FormTitle : Form
    {
        public FormTitle()
        {
            InitializeComponent();
            Thread.CurrentThread.CurrentCulture = CultureInfo.InvariantCulture;
        }



        private void convertButton_Click(object sender, EventArgs e)
        {
            //split the input text by new line
            var newText = inputText.Text.Split(new[] {"\n"}, StringSplitOptions.RemoveEmptyEntries);
            //use LINQ to match all lines that are not entirely made of space like chars, than trim them and put them in an array
            newText = newText.Where(i => !Regex.IsMatch(i, @"^\s+$")).Select(i => i.Trim()).ToArray();
            //joing the results into a string
            resultText.Text = string.Join(",", newText);

        }
    }
}
