package com.example.gadgetcart.model

import com.google.gson.annotations.SerializedName

data class ApiResponse(
    @SerializedName("status") val status: String,
    @SerializedName("result_code") val resultCode: Int,
    @SerializedName("message") val message: String? = null,
    @SerializedName("username") val username: String
)