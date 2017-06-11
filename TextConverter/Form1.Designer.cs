namespace TextConverter
{
    partial class FormTitle
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(FormTitle));
            this.inputTextLabel = new System.Windows.Forms.Label();
            this.inputText = new System.Windows.Forms.RichTextBox();
            this.resultText = new System.Windows.Forms.RichTextBox();
            this.resultTextLabel = new System.Windows.Forms.Label();
            this.convertButton = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // inputTextLabel
            // 
            this.inputTextLabel.AutoSize = true;
            this.inputTextLabel.Font = new System.Drawing.Font("Verdana", 21.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.inputTextLabel.Location = new System.Drawing.Point(12, 9);
            this.inputTextLabel.Name = "inputTextLabel";
            this.inputTextLabel.Size = new System.Drawing.Size(231, 35);
            this.inputTextLabel.TabIndex = 0;
            this.inputTextLabel.Text = "Enter text here";
            // 
            // inputText
            // 
            this.inputText.Location = new System.Drawing.Point(18, 47);
            this.inputText.Name = "inputText";
            this.inputText.Size = new System.Drawing.Size(423, 588);
            this.inputText.TabIndex = 1;
            this.inputText.Text = "";
            // 
            // resultText
            // 
            this.resultText.Location = new System.Drawing.Point(577, 47);
            this.resultText.Name = "resultText";
            this.resultText.Size = new System.Drawing.Size(423, 588);
            this.resultText.TabIndex = 3;
            this.resultText.Text = "";
            // 
            // resultTextLabel
            // 
            this.resultTextLabel.AutoSize = true;
            this.resultTextLabel.Font = new System.Drawing.Font("Verdana", 21.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.resultTextLabel.Location = new System.Drawing.Point(571, 9);
            this.resultTextLabel.Name = "resultTextLabel";
            this.resultTextLabel.Size = new System.Drawing.Size(105, 35);
            this.resultTextLabel.TabIndex = 2;
            this.resultTextLabel.Text = "Result";
            // 
            // convertButton
            // 
            this.convertButton.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.convertButton.Location = new System.Drawing.Point(463, 308);
            this.convertButton.Name = "convertButton";
            this.convertButton.Size = new System.Drawing.Size(93, 71);
            this.convertButton.TabIndex = 4;
            this.convertButton.Text = "Convert";
            this.convertButton.UseVisualStyleBackColor = true;
            this.convertButton.Click += new System.EventHandler(this.convertButton_Click);
            // 
            // FormTitle
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(1025, 660);
            this.Controls.Add(this.convertButton);
            this.Controls.Add(this.resultText);
            this.Controls.Add(this.resultTextLabel);
            this.Controls.Add(this.inputText);
            this.Controls.Add(this.inputTextLabel);
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.Name = "FormTitle";
            this.Text = "TextConverter";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label inputTextLabel;
        private System.Windows.Forms.RichTextBox inputText;
        private System.Windows.Forms.RichTextBox resultText;
        private System.Windows.Forms.Label resultTextLabel;
        private System.Windows.Forms.Button convertButton;
    }
}

