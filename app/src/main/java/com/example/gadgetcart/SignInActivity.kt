package com.example.gadgetcart

import android.os.Bundle
import android.text.InputType
import android.text.method.PasswordTransformationMethod
import android.widget.EditText
import android.widget.ImageView
import androidx.appcompat.app.AppCompatActivity

class SignInActivity : AppCompatActivity() {

    private lateinit var etPassword: EditText
    private lateinit var ivTogglePassword: ImageView
    private var isPasswordVisible = false

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.sign_in)

        etPassword = findViewById(R.id.etPassword)
        ivTogglePassword = findViewById(R.id.ivTogglePassword)

        ivTogglePassword.setOnClickListener {
            togglePasswordVisibility()
        }
    }

    private fun togglePasswordVisibility() {
        isPasswordVisible = !isPasswordVisible

        if (isPasswordVisible) {
            etPassword.inputType = InputType.TYPE_TEXT_VARIATION_VISIBLE_PASSWORD
            etPassword.transformationMethod = null
            ivTogglePassword.setImageResource(R.drawable.ic_eye_open)
        } else {
            etPassword.inputType = InputType.TYPE_CLASS_TEXT or InputType.TYPE_TEXT_VARIATION_PASSWORD
            etPassword.transformationMethod = PasswordTransformationMethod.getInstance()
            ivTogglePassword.setImageResource(R.drawable.ic_eye_closed)
        }

        etPassword.setSelection(etPassword.text.length)
    }
}
