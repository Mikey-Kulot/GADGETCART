package com.example.gadgetcart.Adapter

import android.view.LayoutInflater
import android.view.ViewGroup
import com.example.gadgetcart.R
import androidx.recyclerview.widget.RecyclerView
import com.example.gadgetcart.databinding.JustforyouBinding
import com.example.gadgetcart.model.Product


class ProductAdapter(private val productList: List<Product>) :
    RecyclerView.Adapter<ProductAdapter.ProductViewHolder>() {

    class ProductViewHolder(private val binding: JustforyouBinding) :
        RecyclerView.ViewHolder(binding.root) {

        fun bind(product: Product) {
            binding.ivProductimage.setImageResource(product.imageResId)
            binding.tvProductname.text = product.name
            binding.tvPrice.text = product.price.toString()
            binding.tvRating.text = product.rating
        }
    }

    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): ProductViewHolder {
        val binding = JustforyouBinding.inflate(LayoutInflater.from(parent.context), parent, false)
        return ProductViewHolder(binding)
    }

    override fun onBindViewHolder(holder: ProductViewHolder, position: Int) {
        holder.bind(productList[position])
    }

    override fun getItemCount(): Int = productList.size
}
